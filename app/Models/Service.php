<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable =[
        'service_type',
        'availability',
        'room_type',
        'from_location',
        'to_location',
        'hotel_location',
        'car_model',
        'car_brand',
        'price',
        'contact_id'
    ];


    /**
     * Get the contact that owns the Service
     * supplier procvides services
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class,'supplier_id','id');
    }

    /**
     * Get all of the items for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
