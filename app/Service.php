<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //    protected $fillable = ['name'];
       // or you can simley do this which gives mass assigable to each field.
       protected $guarded = [];
       
}
