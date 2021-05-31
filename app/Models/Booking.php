<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    public $timestamps = true;
    protected $fillable = [
        'customer_name',
        'phone',
        'email',
        'booking_time',
        'status',
        'customer_comment',
        'remark',
        'service_id'
    ];
}
