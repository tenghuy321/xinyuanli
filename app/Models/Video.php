<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'media';
    protected $primaryKey = 'id';

    protected $fillable = [
        'videos',
    ];

    protected $casts = [
        'videos' => 'array',
    ];
}
