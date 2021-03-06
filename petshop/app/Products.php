<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primaryKey = "products_id";

    public function category(){
    	return $this->belongsTo('App\Category', 'category_id', 'products_id');
    }

    public function bill_details(){
    	return $this->hasMany('App\Billdetails', 'products_id', 'billdetails_id');
    }

    public function sale(){
    	return $this->belongsTo('App\Sale', 'saleoff_id', 'products_id');
    }


}
