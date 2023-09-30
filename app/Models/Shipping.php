<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    const STATUS_UNFULFILLED = 'unfulfilled';
    const STATUS_SHIPPING = 'shipping';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_ARRIVED = 'arrived';
    const STATUS_COLLECTED = 'collected';
    const STATUS_RETURNING = 'returning';
    const STATUS_RETURNED = 'returned';

    protected $casts = [
        'price' => 'float',
        'free_level' => 'float',
    ];
    public function getPrice()
    {
        $cartValue = app(Cart::class)->total();
        if ($this->free_level !== null && $cartValue >= $this->free_level) {
            return 0;
        }
        return $this->price;
    }

}
