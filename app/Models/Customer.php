<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_contact',
        'discount',
        'totalprice',
    ];
    public function Purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}

