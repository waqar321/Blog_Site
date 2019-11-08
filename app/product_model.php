<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_model extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
	protected $fillable = ['sku','name','description','regular_price','discount_price','quantity','taxable'];
	public $timestamps = false;
	
	public function images(){
		return $this->hasMany("App\productImageModel", "product_id");
	}
	
}
