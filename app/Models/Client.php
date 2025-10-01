<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'alsclients';
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
