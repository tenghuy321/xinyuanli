<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'order'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $gallery->order = (Gallery::max('order') ?? 0) + 1;
        });
    }
}
