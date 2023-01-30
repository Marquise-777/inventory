<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'selling_price',
    ];
    public function items()
    {
        return $this->belongsTo(items::class, 'product_id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
