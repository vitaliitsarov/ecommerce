<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $guarded = [];

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ARCHIVE = 'archive';

    protected $casts = [
        'images' => 'array',
        'categories' => 'array'
    ];

    public function mainImage()
    {
        return Arr::first($this->images);
    }

}
