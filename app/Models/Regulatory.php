<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regulatory extends Model
{
    protected $table = 'regulatories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'sub_title1',
        'sub_title2',
        'sub_title3',
        'sub_title4',
        'content1',
        'content2',
        'content3',
        'content4',
        'content5',
        'image'
    ];

    protected $casts = [
        'title' => 'array',
        'sub_title1' => 'array',
        'sub_title2' => 'array',
        'sub_title3' => 'array',
        'sub_title4' => 'array',
        'content1' => 'array',
        'content2' => 'array',
        'content3' => 'array',
        'content4' => 'array',
        'content5' => 'array',
    ];
}
