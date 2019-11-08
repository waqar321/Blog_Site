<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\product_model;

class products extends Controller{

	function categories1(){
		// $categoryList = categories::all();
		// return $categoryList;
		
		// $user_tableList = product_model::find($product_id);
		$data['product'] = product_model::all();
		$data['categoryList'] = categories::all();
		return view('centre',$data);
		
		
	}
	function lists(){
		$user_tableList = product_model::all();
		return $user_tableList;
		
	}
	function Product_details($product_id){
		// $user_tableList = product_model::find($product_id);
		$user_tableList = product_model::where([
												["id","=",$product_id],
												["quantity",">",1]
												])->get();
		return $user_tableList;
	}
}
