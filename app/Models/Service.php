<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'image_mobile', 'order', 'status', 'image_height', 'image_width', 'image_mobile_height', 'image_mobile_width'
    ];
}
