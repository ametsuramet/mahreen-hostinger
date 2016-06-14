<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function product()
    {
    	return $this->hasOne('App\Product');
    }

    public function product()
    {
    	return $this->belongsTo('App\Order');
    }
}
