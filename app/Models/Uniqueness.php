<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uniqueness extends Model
{
    protected $table = 'uniqueness';
    protected $primaryKey = 'id';

    protected $fillable = [
        'num',
        'title',
        'content'
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
