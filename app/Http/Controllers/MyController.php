<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
	
	public function __construct() {
		
	}
	
	
	public function checkAuth(Request $request) {
		
		$email = $request->input('name');
		$pass = $request->input('pass');
		
		if($email == "admin@example.com" && $pass=="123456") {
			
			$request->session()->put('name',$email);
			//var_dump($request);
			$value = $request->session()->get('name');

			return $value;	
		}
		else {
			return "UnAuthenticated";
		}
		
		
	}
	
	public function welcome(Request $request) {

		return $value = $request->session()->get('name');
	}
	
	
}
