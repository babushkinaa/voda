<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function ordertype()
    {
        return $this->hasOne(Order::class);
    }
}
