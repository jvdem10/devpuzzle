<?php

namespace App\Console\Commands;

use App\Models\GuessTheTechGame;
use App\Models\Tech;
use Carbon\Carbon;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use DateTimeInterface;
use DateInterval;

#[Signature('game:generate-daily-guess-the-tech')]
#[Description('Generate the daily Guess the Tech game')]
class GenerateDailyGuessTheTechGame extends Command implements Isolatable
{
    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $today = Carbon::now('UTC')->toDateString();

        $recentTechsIds = GuessTheTechGame::query()
            ->where('date', '>=', now('UTC')->subDays(14)->toDateString())
            ->pluck('tech_id');

        $newGameTechId = Tech::query()
            ->whereNotIn('id', $recentTechsIds)
            ->inRandomOrder()
            ->value('id');

        GuessTheTechGame::firstOrCreate(
            ['date' => $today],
            ['tech_id' => $newGameTechId],
        );
    }

    public function isolationLockExpiresAt(): DateTimeInterface|DateInterval
    {
        return now()->plus(minutes: 2);
    }
}
