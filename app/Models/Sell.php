<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    //
    public function sell_details()
    {
        return $this->hasMany(Sell_Detail::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
