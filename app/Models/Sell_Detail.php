<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell_Detail extends Model
{
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
    public function floral_arrangement()
    {
        return $this->belongsTo(Floral_Arrangement::class);
    }
}
