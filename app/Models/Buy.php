<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    //
    protected $table = 'alsbuys';
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
