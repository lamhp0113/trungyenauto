<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = [
        'type',
        'title',
        'short_description',
        'content',
        'image'
    ];
}
