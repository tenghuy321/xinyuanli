<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'phone_number',
        'telegram',
        'location',
        'website',
        'facebook_name',
        'facebook',
        'map',
        'working_hour'
    ];

}
