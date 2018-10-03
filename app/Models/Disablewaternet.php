<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disablewaternet extends Model
{
    protected $table = 'disablewaternets';

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
