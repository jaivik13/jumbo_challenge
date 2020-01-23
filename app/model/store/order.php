<?php

namespace App\model\store;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = ['id','petId','quantity','shipDate','status','complete'];
}
