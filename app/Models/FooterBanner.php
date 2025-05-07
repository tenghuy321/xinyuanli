<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterBanner extends Model
{
    protected $table = 'footer_banners';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
