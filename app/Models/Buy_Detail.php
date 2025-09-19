<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy_Detail extends Model
{
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function buy()
    {
        return $this->belongsTo(Buy::class);
    }
}
