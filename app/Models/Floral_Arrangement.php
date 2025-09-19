<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floral_Arrangement extends Model
{
    //
    public function sell_details()
    {
        return $this->hasMany(Sell_Detail::class);
    }
    public function plant_category()
    {
        return $this->belongsTo(Plant_Category::class);
    }
}
