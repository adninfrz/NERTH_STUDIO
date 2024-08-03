<?php

namespace App\Models;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'customer_id',
    ];

    /**
     * Get the customer that owns the order.
     */
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
