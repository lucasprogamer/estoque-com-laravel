<?php

namespace estoque\Http\Controllers;

//use Illuminate\Http\Request;
use estoque\Http\Requests\loginRequest;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Auth;
use Request;

class LoginController extends Controller
{
 	  	public function login()
 	  	{
 	  		return view('auth.login');
 	  	}
 	  	public function auth(loginRequest $request )
 	  	{
 	  		$credenciais = $request->only('email','password');
 	  		$remenber = $request->only('remenber');

 	  		if (Auth::attempt($credenciais,$remenber)) {
 	  			return redirect()->action('ProdutoController@lista');
 	  		}else{

 				$faillogin = 'login incorreto';  			
 	  			return redirect()->action('LoginController@login')->with($faillogin); 						
 	  		}
 	  	}

 	  	public function registro()
 	  	{
 	  		return view('auth.register');
 	  	}

}