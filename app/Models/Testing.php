<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    protected $table = 'testing';
    protected $primaryKey = 'id';

    protected $fillable = [
        'images'
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
