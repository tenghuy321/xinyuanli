<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'images',
        'order'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($hero) {
            $hero->order = (Hero::max('order') ?? 0) + 1;
        });
    }
}
