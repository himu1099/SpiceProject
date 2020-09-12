<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public $timestamps = false;
    public function Product()
{
    return $this->belongsTo('App\Models\Product');
}
}
