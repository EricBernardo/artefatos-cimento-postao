<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeProduct extends Model
{
    protected $fillable = [
        'title', 'url', 'image', 'image_mobile', 'order', 'status',
    ];
}
