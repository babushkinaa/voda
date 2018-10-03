<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liveobject extends Model
{
    protected $table = 'liveobjects';

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
