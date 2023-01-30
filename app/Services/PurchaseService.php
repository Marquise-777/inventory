<?php
namespace App\Services;

use App\Models\Customer;
use App\Models\Purchase;

class PurchaseService 
{
    public function create($attributes) : Customer
    {
       $customer = Customer::create($attributes);
       $attributes['customer_id'] = $customer['id'];
       
        foreach($attributes['sale'] as $item) {
            $itemservice = new PurchaseItemService();
            $purchased = $itemservice->create($attributes['customer_id'],$item);
        }
        //  $purchased = Purchase::where('customer_id','=', $customer->id)->get();
       return $customer;
    }
}