<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $tables = 'overtimes';

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
