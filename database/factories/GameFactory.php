<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GameFactory extends Factory
{
    public function definition(): array
    {   
        // ok... turns out title run out of unique titles pretty quickly, so we'll just use 2 random words instead
        $title = $this->faker->unique()->words(2, true);

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