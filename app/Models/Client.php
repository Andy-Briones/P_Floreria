<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function sells()
    {
        return $this->hasMany(Sell::class);
    }
}
