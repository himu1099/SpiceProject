<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','password','email','address','contectno' ];
    public $timestamps = false;
}
