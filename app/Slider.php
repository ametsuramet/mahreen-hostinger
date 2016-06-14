<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function product()
    {
    	return $this->hasOne('App\Product');
    }

    public function category()
    {
    	return $this->hasOne('App\Category');
    }
}
