<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id', 'service_id',
        'quantity', 'price', 'from', 'to', 'address', 'phone', 'status',
    ];

    /**
     * Get the user associated with the Orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
    /**
     * Get the service associated with the Orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'service_id', 'id');
    }
}