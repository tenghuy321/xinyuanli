<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRegistration extends Model
{
    protected $table = 'businessregistrations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'sub_title1',
        'sub_title2',
        'sub_title3',
        'sub_title4',
        'sub_title5',
        'sub_title6',
        'sub_title7',
        'content1',
        'content2',
        'content3',
        'content4',
        'content5',
        'content6',
        'content7',
        'content8',
        'content9',
        'content10',
        'content11',
        'content12',
        'content13',
        'image',
        'images'
    ];

    protected $casts = [
        'title' => 'array',
        'sub_title1' => 'array',
        'sub_title2' => 'array',
        'sub_title3' => 'array',
        'sub_title4' => 'array',
        'sub_title5' => 'array',
        'sub_title6' => 'array',
        'sub_title7' => 'array',
        'content1' => 'array',
        'content2' => 'array',
        'content3' => 'array',
        'content4' => 'array',
        'content5' => 'array',
        'content6' => 'array',
        'content7' => 'array',
        'content8' => 'array',
        'content9' => 'array',
        'content10' => 'array',
        'content11' => 'array',
        'content12' => 'array',
        'content13' => 'array',
        'images' => 'array'
    ];
}
