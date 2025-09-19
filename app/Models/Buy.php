<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    //
    public function buy_details()
    {
        return $this->hasMany(Buy_Detail::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
