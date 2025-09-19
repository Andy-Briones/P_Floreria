<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant_Category extends Model
{
    //
    public function floral_arrangements()
    {
        return $this->hasMany(Floral_Arrangement::class);
    }
}
