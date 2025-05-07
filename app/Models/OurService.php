<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    protected $table = 'our_services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'icon'
    ];
    protected $casts = [
        'title' => 'array',
    ];
}
