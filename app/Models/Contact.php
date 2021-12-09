<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_type',
        'contact_name',
        'supplier_type',
        'personal_id',
        'vat_id',
        'coc',
        'phone',
        'email'
    ];

    const CONTACT = ['supplier','customer'];
    const TYPE = ['flight','car','hotel'];

    /**
     * Get all of the services for the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get all of the orders for the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // public function scopeSupplier(Builder $builder)
    // {
    //     return $builder->where('supplier_type','supplier');
    // }
}
