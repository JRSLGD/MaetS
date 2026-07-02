<?php

namespace App\Models;

use Database\Factories\GameFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Game extends Model
{
    /** @use HasFactory<GameFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'cover_image',
        'download_url',
        'published',
    ];

    public function owners()
    {
        return $this->belongsToMany(User::class, 'libraries')
                    ->withPivot('acquired_at');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}