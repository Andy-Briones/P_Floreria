<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //relacion inversa
    public function product_category()
    {
        return $this->belongsTo(Product_Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function sell_details()
    {
        return $this->hasMany(Sell_Detail::class);
    }
    public function buy_details()
    {
        return $this->hasMany(Buy_Detail::class);
    }
}
