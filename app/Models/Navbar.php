<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table = 'navbar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'order'
    ];

    protected $casts = [
        'title' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($nav) {
            $nav->order = (Navbar::max('order') ?? 0) + 1;
        });
    }
}
