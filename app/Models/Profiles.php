<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'link',
        'image',
        'icon'
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
