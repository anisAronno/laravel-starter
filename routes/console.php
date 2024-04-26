<?php

use Illuminate\Support\Facades\Schedule;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Schedule::command('activitylog:clean')->daily();

Schedule::command('cache:prune-stale-tags')->hourly();

Schedule::command('queue:flush')->weekly();

Schedule::command('queue:restart')->hourly();

Schedule::command('clear-cache')->weekly();

Schedule::command('logs:clean')->dailyAt('1:00');

Schedule::command('telescope:prune')->daily();

Schedule::command('queue:work --daemon --sleep=3 --tries=3')
    ->everyMinute()
    ->withoutOverlapping()
    ->sendOutputTo(storage_path('logs/queue-jobs.log'), true);
