<?php

namespace App\Services;

use App\Models\items;
use App\Models\Purchase;

class PurchaseItemService
{
    public function create($customerid, $item) : Purchase
    {
        $itemupdate = items::findOrfail($item['title']);
        $itemupdate->unit = $itemupdate->unit - $item['unit'];
        $itemupdate->save();
        $attributes['customer_id'] = $customerid;
        $attributes['product_id'] = $item['title'];
        $attributes['quantity'] = $item['unit'];
        $attributes['price'] = $item['price'];
        $attributes['selling_price'] = $item['sellingprice'];

        $purchaseitem = Purchase::create($attributes);
        return $purchaseitem;
    }
}