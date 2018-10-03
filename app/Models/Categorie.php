<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    public function orders()
    {
        return $this->hasOne(Order::class);
    }

    public function show()
    {
        $categories = new Categorie();
        return $categories::all();
    }

    public function add($request)
    {
        $categories = new Categorie();
        $categories->create($request->all());
    }

    public function categoryUpdate($request)
    {

    }
}
