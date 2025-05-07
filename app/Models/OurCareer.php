<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurCareer extends Model
{
    protected $table = 'our_careers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
    ];
}
