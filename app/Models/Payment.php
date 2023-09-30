<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    const STATUS_UNPAID = 'unpaid';
    const STATUS_FAILED = 'failed';
    const STATUS_EXPIRED = 'expired';
    const STATUS_PAID = 'paid';
    const STATUS_REFUNDING = 'refunding';
}
