<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    //
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function review()
    {
    	return $this->hasMany('App\Review');
    }
}
