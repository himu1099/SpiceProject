<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    public function Variant()
    {
        return $this->hasMany('App\Models\Variant');
    }
}
