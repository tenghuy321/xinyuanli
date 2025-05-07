<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'link',
        'icon',
        'active'
    ];

    protected $casts = [
        'title' => 'array',
        'sub_title' => 'array',
        'content' => 'array',
    ];

}
