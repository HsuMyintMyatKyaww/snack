<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function o_items(){
    	return $this->hasMany('App\OItem');
    }
}
