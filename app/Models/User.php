<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public  $timestamps=false;
    // protected $guarded = [];
    protected $fillable = ['name','email','age','city'];
}
