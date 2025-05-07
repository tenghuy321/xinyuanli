<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    protected $table = 'csr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'order'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($csr) {
            $csr->order = (Csr::max('order') ?? 0) + 1;
        });
    }
}
