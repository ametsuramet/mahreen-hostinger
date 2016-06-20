<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = ['SKU', 'title', 'price', 'discount', 'description', 'size', 'category_id', 'slug', 'is_featured', 'flag'];
    
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function review()
    {
    	return $this->hasMany('App\Review');
    }
}
