<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model 
{
    //
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function boss()
    {
        return $this->hasOne(Boss::class);
    }
}
