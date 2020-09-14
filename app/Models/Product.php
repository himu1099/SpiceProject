<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    public function __construct()
    {
        parent::__construct();
    }
    public function variant()
    {
        return $this->hasMany('App\Models\Variant');
    }
}
