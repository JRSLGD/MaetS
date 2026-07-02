<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Game;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $games = Game::all();

        foreach ($users as $user) {

            $ownedGames = $games->random(rand(5, 15));

            foreach ($ownedGames as $game) {
                $user->library()->attach($game->id, [
                    'acquired_at' => now(),
                ]);
            }
        }
    }
}