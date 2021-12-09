<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_number',
        'duration',
        'trip_type',
        'class_type',
        'room_type',
        'from_time',
        'to_time',
    ];

    /**
     * Get the service that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Get the order that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
