<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'booking_time',
        'price',

    ];
}
