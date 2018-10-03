<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function categories()
    {
        return $this->belongsTo(Categorie::class,'categorie_id','id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'statuse_id','id');
    }

    public function owertimes()
    {
        return $this->belongsTo(Overtime::class,'overtimes_id','id');
    }

    public function disablewaternet()
    {
        return $this->belongsTo(Disablewaternet::class,'disablewaternets_id','id');
    }

    public function liveobjects()
    {
        return $this->belongsTo(Liveobject::class,'livaobjects_id','id');
    }
}
