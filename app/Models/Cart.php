<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'productId');
    }

    public static function addOrUpdate($productId, $quantity)
    {
        $item = self::where(['productId' => $productId, 'userId' => auth()->user()->id])->first();

        // If item is already in cart than update quantity
        if ($item) {
            $item->quantity = $item->quantity + $quantity;
            $item->save();
            return;
        }

        // Otherwise create new cart element
        $cartElement = new Cart();
        $cartElement->productId = $productId;
        $cartElement->quantity = $quantity;
        $cartElement->userId = auth()->user()->id;
        $cartElement->save();
    }

    public static function getCartContent()
    {
        return self::where(['userId' => auth()->user()->id])->with('product')->get();
    }
}
