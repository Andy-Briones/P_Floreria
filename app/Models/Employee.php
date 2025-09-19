<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }
    public function administrators()
    {
        return $this->hasOne(Administrator::class);
    }
    public function sells()
    {
        return $this->hasMany(Sell::class);
    }
}
