<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
   protected $fillable=['firstname','lastname','address','dob','contact','country','email','password','status'];
}
