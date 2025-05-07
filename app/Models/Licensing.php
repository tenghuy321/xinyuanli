<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licensing extends Model
{
    protected $table = 'licensing';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
