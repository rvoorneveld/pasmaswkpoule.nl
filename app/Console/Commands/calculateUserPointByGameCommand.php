<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Game;
use App\Predictions;
use Illuminate\Support\Facades\DB;

class calculateUserPointByGameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'points:bygame {gameId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update points for al predictions after updating a game';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $gameId = $this->argument('gameId') ?? null;
        if (
            false === empty($gameId) &&
            false === empty($game = Game::find($gameId)) &&
            false === empty($predictions = Predictions::where('gameId', $gameId)->get())
        ) {
            $this->info("Game found by id: {$gameId}");
            $this->info("Game result: {$game->goalsHome} - {$game->goalsAway} (Yellow: {$game->cardsYellow}, Red: {$game->cardsRed}");
            $this->info("Found a total of: {$predictions->count()} prediction(s)");

            foreach ($predictions as $prediction) {
                $userName = $prediction->user->name;

                $this->info("--- Starting prediction for user {$userName}");

                $points = 0;
                switch (true) {
                    case (
                        $prediction->goalsHome === $game->goalsHome &&
                        $prediction->goalsAway === $game->goalsAway
                    ):
                        $this->info("Awarded 5 points to {$userName}. Winner + goals scored both teams correct");
                        $points += 5;
                        break;
                    case (
                        $prediction->goalsHome < $prediction->goalsAway &&
                        $game->goalsHome < $game->goalsAway
                    ):
                        $this->info("Awarded 2 points to {$userName}. Winner correct");
                        $points += 2;
                        break;
                    case (
                        $prediction->goalsHome > $prediction->goalsAway &&
                        $game->goalsHome > $game->goalsAway
                    ):
                        $this->info("Awarded 2 points to {$userName}. Winner correct");
                        $points += 2;
                        break;
                    case (
                        $prediction->goalsHome === $prediction->goalsAway &&
                        $game->goalsHome === $game->goalsAway
                    ):
                        $this->info("Awarded 2 points to {$userName}. Draw correct");
                        $points += 2;
                        break;
                }

                switch (true) {
                    case (
                        $prediction->cardsRed === $game->cardsRed &&
                        $prediction->cardsYellow === $game->cardsYellow
                    ):
                        $this->info("Awarded 5 points to {$userName}. Red cards + Yellow cards correct");
                        $points += 5;
                        break;
                    case  $prediction->cardsRed === $game->cardsRed:
                        $this->info("Awarded 1 point to {$userName}. Red cards correct");
                        $points += 1;
                        break;
                    case  $prediction->cardsYellow === $game->cardsYellow:
                        $this->info("Awarded 1 point to {$userName}. Yellow cards correct");
                        $points += 1;
                        break;
                }

                $this->info("Awarded a total of {$points} point(s) to {$userName}.");

                DB::table('predictions')
                    ->where('id', $prediction->id)
                    ->update([
                        'points' => $points,
                    ]);

                $this->info("---");
            }
            $this->info('Done');
            return;
        }
        $this->error('Something went wrong');
    }
}
