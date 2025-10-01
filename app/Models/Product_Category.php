<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    //
    protected $table = 'alsproduct__categories';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
