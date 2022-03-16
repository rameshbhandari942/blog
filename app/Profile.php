<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['name','address','pan_vat_no','contact','email','description','image'];
}
