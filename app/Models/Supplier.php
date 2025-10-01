<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'alssuppliers';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }
}
