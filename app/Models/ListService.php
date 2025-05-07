<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListService extends Model
{
    protected $table = 'listServices';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content'
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
