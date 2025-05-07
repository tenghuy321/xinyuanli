<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    protected $table = 'accounting';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'sub_title1',
        'sub_title2',
        'sub_title3',
        'content1',
        'content2',
        'content3',
        'image'
    ];

    protected $casts = [
        'title' => 'array',
        'sub_title1' => 'array',
        'sub_title2' => 'array',
        'sub_title3' => 'array',
        'content1' => 'array',
        'content2' => 'array',
        'content3' => 'array',
    ];
}
