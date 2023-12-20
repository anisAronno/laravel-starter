<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('telescope:prune')->daily();
        $schedule->command('activitylog:clean')->daily();
        $schedule->command('cache:prune-stale-tags')->hourly();

        $schedule->command('queue:flush')->weekly();

        $schedule->command('queue:restart')->hourly();

        $schedule->command('clear-cache')->weekly();

        $schedule->command('logs:clean')->dailyAt('1:00');

        $schedule->command('queue:work --daemon --sleep=3 --tries=3')
            ->everyMinute()
            ->withoutOverlapping()
            ->sendOutputTo(storage_path().'/logs/queue-jobs.log');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Get the timezone that should be used by default for scheduled events.
     *
     * @return \DateTimeZone|string|null
     */
    protected function scheduleTimezone()
    {
        return date_default_timezone_get();
    }
}
