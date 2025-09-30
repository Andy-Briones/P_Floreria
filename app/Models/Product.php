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
    public function sell()
    {
        return $this->hasMany(Sell::class);
    }
}
