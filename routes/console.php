<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('game:generate-daily-guess-the-tech')
    ->dailyAt('00:00')
    ->timezone('UTC')
    ->withoutOverlapping(2);
