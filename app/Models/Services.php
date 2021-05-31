<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $table = 'services';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'category_id',
        'short_description',
        'long_description',
        'booking_time',
        'price',
        'images',


    ];
}
