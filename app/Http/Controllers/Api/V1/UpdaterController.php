<?php

namespace App\Http\Controllers\Api\V1;

use App\Jobs\UpdateProjectJob;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class UpdaterController extends Controller
{
    public function checkForUpdates(): JsonResponse
    {
        $currentVersion = $this->getCurrentVersion();
        $latestRelease = $this->fetchLatestRelease();

        if (is_null($latestRelease)) {
            return response()->json(['error' => 'Could not fetch data from GitHub'], 500);
        }

        $latestVersion = ltrim($latestRelease['tag_name'], 'v');
        $changelog = $latestRelease['body'] ?? 'No changelog available'; // Get changelog from the release body

        // Compare versions
        return response()->json([
            'current_version'  => $currentVersion,
            'latest_version'   => $latestVersion,
            'update_available' => version_compare($latestVersion, $currentVersion, '>'),
            'changelog'        => $changelog, // Include changelog in the response
        ]);
    }

    public function updateProject(): JsonResponse
    {
        $currentVersion = $this->getCurrentVersion();
        $latestRelease = $this->fetchLatestRelease();

        if (is_null($latestRelease) || empty($latestRelease['zipball_url'])) {
            return response()->json(['error' => 'No update available'], 404);
        }

        $latestVersion = ltrim($latestRelease['tag_name'], 'v');

        // Check if the current version is already up to date
        if (version_compare($latestVersion, $currentVersion, '<=')) {
            return response()->json(['message' => 'Project is already updated.'], 200);
        }

        // Dispatch the job to handle the update
        UpdateProjectJob::dispatch($latestRelease);

        return response()->json(['message' => 'Update process has been started.'], 202);
    }

    private function fetchLatestRelease()
    {
        $repoUrl = 'https://api.github.com/repos/anisAronno/laravel-starter/releases/latest';

        // Make the API request with User-Agent
        $context = stream_context_create([
            'http' => [
                'header' => [
                    'User-Agent: PHP',
                ],
            ],
        ]);

        $response = @file_get_contents($repoUrl, false, $context);

        return $response !== false ? json_decode($response, true) : null;
    }

    private function getCurrentVersion(): string
    {
        // Get the current version from composer.json
        $composerFile = base_path('composer.json');
        
        if (File::exists($composerFile)) {
            $composerContent = json_decode(File::get($composerFile), true);
            return $composerContent['version'] ?? '0.0.0'; // Default to '0.0.0' if version key doesn't exist
        }

        return '0.0.0'; // Default if composer.json does not exist
    }
}
