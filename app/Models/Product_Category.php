<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    //
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
