<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'audites';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
