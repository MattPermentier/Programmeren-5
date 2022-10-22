<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $table = 'bikes';

    protected $fillable = [
        'user_id',
        'is_active',
        'brand',
        'model',
        'category',
        'description',
        'image'
    ];
}
