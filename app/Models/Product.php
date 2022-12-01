<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // many to one
    // many products have relations with only one category
    // Created belongsTo relation - allows access to all category information of product
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {
        // saves attributes after edit
        static::saving(function($product) {
            $product->product_attributes = json_encode(request('product_attributes'));
        });
    }

     // shopping cart
     public function shoppingcart()
     {
         return $this->hasMany(ShoppingCart::class);
     }

     public function orderproduct()
     {
         return $this->hasMany(ProductOrder::class);
     }

    


}
