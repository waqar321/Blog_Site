<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\menus;
use App\categories;
use App\register_model;
use App\testing;
use App\product_model;
use App\productImageModel;

class Home extends Controller{
	
	public function __construct() {
		// $this->middleware('checkhome');
    }
	function home(){
		
        $data['menus'] = menus::all();
        $data['categoryList'] = categories::all();
		$data['product']= product_model::all();
		$data['productImages'] = product_model::find('1')->images;
		return view('_home', $data);
	}	
	function Logoutpage(){
		Session::flush();
		return redirect('Loginpage')->with('status', "You Are Logged Out successfully!!");
	}

	function form_login(Request $request){
	
		if($request->isMethod('post')){
				$data = $request->input();
			 
			   if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){

					 session(['key' => $data['email']]);
					return redirect('home')->with("status", "You are Logged In  ".$data['email']);
			   }
			   else{
					return redirect('Loginpage')->with("status", "Your Record isn't match");
			   }
	   }
		$data['menus'] = menus::all();
		return view('registeration/_login', $data);

	}	 
	function form_register(Request $request){

		if($request->isMethod('post')){
			$postedData = $request->all();	
		
			$registerData = new register_model;
			$registerData['name'] = $postedData['Username'];
			$registerData['email'] = $postedData['email'];	
			$registerData['password'] = Hash::make($postedData['password']);	//Hash::make($value);
			$registerData->save();
		
			return redirect('Loginpage')->with("status", "Record Saved Successfully");
		}
		$data['menus'] = menus::all();
		return view('registeration/_register', $data);
		
	}
	function create(Request $request){
	
		if($request->isMethod('post')){
			$postedData = $request->all();
			
			$product = new product_model;
			$product['sku'] = $postedData['sku'];
			$product['name'] = $postedData['name'];	
			$product['description'] = $postedData['description'];
			$product['regular_price'] = $postedData['regular_price'];
			$product['discount_price'] = $postedData['discount_price'];
			$product['quantity'] = $postedData['quantity'];
			$product['taxable'] = $postedData['taxable'];
			$product['product_status_id'] = 1;
			$product['category_id'] = 1;
			$product->save();
			
			return redirect('home')->with("status", "Product Has Been Added");		
		}
		$data['menus'] = menus::all();
		return view('menus/create', $data);
	}

	function Delete($id){
			product_model::where('product_id', '=', $id)->delete();
		    $data['menus'] = menus::all();
	        $data['categoryList'] = categories::all();
			$data['product']= product_model::all();
			$data['productImages'] = product_model::find('1')->images;
			return view('_home', $data);

	}
	function Update($id){
		
		product_model::where('product_id', $id)->update(['regular_price' => '200000']);
	    $data['menus'] = menus::all();
        $data['categoryList'] = categories::all();
		$data['product']= product_model::all();
		$data['productImages'] = product_model::find('1')->images;
		return view('_home', $data);

	}
	function contact_us(){
		$data['menus'] = menus::all();
		return view('menus/contactus', $data);
	}
	function services(){
		$data['menus'] = menus::all();
		return view('menus/services', $data);
	}
	function portfolio(){
		$data['menus'] = menus::all();
		return view('menus/portfolio', $data);
	}
	function about_us(){
		$data['menus'] = menus::all();
		return view('menus/aboutus', $data);
	}
	
	
	function lists(){
		
		$data['heading'] = "First Heading";
		$data['productList'] = array("iPhone 11", "iPhone 9", "iPhone 10");
		$data['productDetail'] = product_model::all();
		$data['categoryList'] = categories::all();
		return view('Layout/list', $data);
	}
	
	function product_details($product_id){
		// $user_tableList = product_model::where([
												// ["id","=",$product_id],
												// ["quantity",">",1]
												// ])->get();
		// $data['productImages'] = productImageModel::where("product_id","=",$product_id)->get();
		// $data['categoryList'] = categories::all();
												
	
		$data['productDetail'] = product_model::find($product_id);
		$data['productImages'] = product_model::find($product_id)->images;
		// return $data['productImages'];
		return view('Layout/detail', $data);

	}


}




























?>