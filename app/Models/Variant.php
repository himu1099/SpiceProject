<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['product_id','name','price','quantity','size','color'];

    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
