<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Apod extends Model
{
    use HasFactory;

    protected $table = 'apod';
    protected $fillable = [
        'title',
        'url',
        'hdurl',
        'explanation',
        'published_at',
    ];
}