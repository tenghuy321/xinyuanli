<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    protected $table = 'compliances';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'sub_title' => 'array',
        'content' => 'array',
    ];
}
