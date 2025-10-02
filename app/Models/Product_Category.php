<?php

namespace App\Models;

use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    //
     use HasFactory;

    protected $table = 'alsproduct__categories';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    protected static function newFactory()
    {
        return ProductCategoryFactory::new();
    }
}

