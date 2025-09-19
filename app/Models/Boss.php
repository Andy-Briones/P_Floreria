<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    //
    public function administrator()
    {
        return $this->belongsTo(Administrator::class);
    }
}
