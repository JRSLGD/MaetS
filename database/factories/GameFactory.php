<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GameFactory extends Factory
{
    public function definition(): array
    {   
        // since faker doesn't provide a game provider, we'll just use random a title
        $title = $this->faker->unique()->title();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 5, 70), 
            'cover_image' => $this->faker->imageUrl(640, 360, 'games'),
            'download_url' => '/downloads/' . Str::slug($title),
        ];
    }
}