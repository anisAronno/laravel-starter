<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class UpdateProjectJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $latestRelease;

    public $timeout = 600; // 10 minutes

    public function __construct($latestRelease)
    {
        $this->latestRelease = $latestRelease;
    }

    public function handle()
    {
        try {
            Artisan::call('down');
            $backupPath = $this->backupProject();
            $this->performUpdate();
            $this->cleanup([$backupPath]);
            Artisan::call('up');
            Log::info('Update completed successfully.');
        } catch (\Exception $e) {
            $this->handleFailure($e, $backupPath);
        }
    }

    protected function performUpdate()
    {
        $zipballUrl = $this->latestRelease['zipball_url'] ?? null;

        if (is_null($zipballUrl)) {
            throw new \Exception('No update available.');
        }

        $tempFile = storage_path('app/update.zip');
        $tempDir  = storage_path('app/update_temp');

        $this->downloadFile($zipballUrl, $tempFile);
        $extractedDir = $this->extractZip($tempFile, $tempDir);
        $this->replaceProjectFiles($extractedDir, base_path());
        $this->removeOldFiles($extractedDir, base_path());
        $this->cleanup([$tempFile, $tempDir]);

        Artisan::call('migrate', ['--force' => true]);
        Artisan::call('optimize:clear');

        // Run composer install directly
        $this->runComposerInstall();
    }

    protected function runComposerInstall()
    {
        $output    = [];
        $returnVar = 0;
        exec('composer install --no-interaction', $output, $returnVar);

        if ($returnVar !== 0) {
            throw new \Exception('Composer install failed: '.implode("\n", $output));
        }
    }

    protected function downloadFile($url, $destination)
    {
        $response = Http::timeout(120)->get($url);

        if ($response->failed()) {
            throw new \Exception("Failed to download update: {$response->status()}");
        }
        File::put($destination, $response->body());
    }

    protected function extractZip($filePath, $extractTo)
    {
        $zip = new \ZipArchive;

        if ($zip->open($filePath) === true) {
            File::ensureDirectoryExists($extractTo);
            $zip->extractTo($extractTo);
            $zip->close();

            // Find the extracted directory (should be the only directory in $extractTo)
            $extractedDirs = glob($extractTo.'/*', GLOB_ONLYDIR);

            if (empty($extractedDirs)) {
                throw new \Exception('Failed to locate extracted directory.');
            }

            return $extractedDirs[0]; // Return the path to the extracted directory
        } else {
            throw new \Exception('Failed to open the zip file.');
        }
    }

    protected function backupProject()
    {
        $backupPath = storage_path('app/backup/'.date('Y-m-d_H-i-s'));
        File::ensureDirectoryExists($backupPath);

        $basePath = base_path();
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($basePath, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $item) {
            if ($item->isDir()) {
                continue;
            }

            $relativePath = str_replace($basePath.DIRECTORY_SEPARATOR, '', $item->getPathname());
            $targetPath   = $backupPath.DIRECTORY_SEPARATOR.$relativePath;

            // Skip .env, .git folder, storage folder, and vendor folder
            if (
                $item->getFilename()              === '.env' ||
                strpos($relativePath, '.git')     === 0      ||
                strpos($relativePath, 'storage')  === 0      ||
                strpos($relativePath, 'vendor')   === 0
            ) {
                continue;
            }

            File::ensureDirectoryExists(dirname($targetPath));
            File::copy($item->getPathname(), $targetPath);
        }

        return $backupPath;
    }

    protected function cleanup(array $paths)
    {
        foreach ($paths as $path) {
            if (File::isDirectory($path)) {
                File::deleteDirectory($path);
            } elseif (File::exists($path)) {
                File::delete($path);
            }
        }
    }

    protected function replaceProjectFiles($source, $destination)
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $item) {
            $target = str_replace($source, $destination, $item->getPathname());

            // Skip storage folder, .env file, .git folder, and vendor folder
            if (
                strpos($target, storage_path())                            === 0      ||
                basename($target)                                          === '.env' ||
                strpos($target, $destination.DIRECTORY_SEPARATOR.'.git')   === 0      ||
                strpos($target, $destination.DIRECTORY_SEPARATOR.'vendor') === 0
            ) {
                continue;
            }

            if ($item->isDir()) {
                File::ensureDirectoryExists($target);
            } else {
                File::copy($item->getPathname(), $target, true); // Overwrite existing files
            }
        }
    }

    protected function removeOldFiles($source, $destination)
    {
        $sourceFiles = $this->getFileList($source);
        $destFiles   = $this->getFileList($destination);

        $filesToRemove = array_diff($destFiles, $sourceFiles);

        foreach ($filesToRemove as $file) {
            $fullPath = $destination.DIRECTORY_SEPARATOR.$file;

            // Skip storage folder, .env file, and vendor folder
            if (
                strpos($fullPath, storage_path())                            === 0      ||
                basename($fullPath)                                          === '.env' ||
                strpos($fullPath, $destination.DIRECTORY_SEPARATOR.'vendor') === 0
            ) {
                continue;
            }

            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }

        // Remove empty directories
        $this->removeEmptyDirectories($destination);
    }

    protected function getFileList($dir)
    {
        $files    = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $file) {
            if (! $file->isDir()) {
                $files[] = str_replace($dir.DIRECTORY_SEPARATOR, '', $file->getPathname());
            }
        }

        return $files;
    }

    protected function removeEmptyDirectories($dir)
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $path) {
            if ($path->isDir()) {
                $dirPath = $path->getPathname();

                if (! (new \FilesystemIterator($dirPath))->valid()) {
                    rmdir($dirPath);
                }
            }
        }
    }

    protected function handleFailure(\Exception $e, $backupPath)
    {
        Log::error("Update failed: {$e->getMessage()}");
        $this->rollbackProject($backupPath);
        Artisan::call('up');
        throw $e;
    }

    protected function rollbackProject($backupPath)
    {
        if (File::isDirectory($backupPath)) {
            $this->replaceProjectFiles($backupPath, base_path());
            Log::info("Rolled back to backup: $backupPath");
        } else {
            Log::warning("Backup not found: $backupPath");
        }
    }

    public function failed(?Throwable $exception)
    {
        Artisan::call('up');
        Log::error("Update job failed: {$exception->getMessage()}");
    }
}
