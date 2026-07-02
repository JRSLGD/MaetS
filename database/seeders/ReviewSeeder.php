<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Game;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $games = Game::all();

        foreach ($users as $user) {

            $reviewedGames = $games->random(rand(3, 10));

            foreach ($reviewedGames as $game) {

                Review::factory()->create([
                    'user_id' => $user->id,
                    'game_id' => $game->id,
                ]);
            }
        }
    }
}