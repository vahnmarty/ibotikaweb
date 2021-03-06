<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use App\Models\Auth\User;

class UserController extends Controller
{
    public function __construct()
    {
    	//$this->middleware('api-auth');
    	//$this->middleware('cors');
    }

    public function register(Request $request)
    {
    	// http://web.ibotika.localhost/api/user/register?token=123&secret=123&first_name=Vahn&last_name=Marty&email=vannix@gmail.com&username=vannix&password=12345678&password_confirmation=12345678
    	
    	$data = json_decode($request->payload, true);
    	if(!$data){
    		$data = $request->all();
    	}

    	$validator = Validator::make($data,[
	        'first_name'=> 'required|string|max:255',
    	    'last_name' => 'required|string|max:255',
    	    'email' 	=> 'required|string|max:255|email',
    	    'username' 	=> 'required|string|max:50|unique:users',
    	    'password' 	=> 'required|string|min:6|confirmed',
    	    'cellphone' => 'required'
    	]);

    	if ($validator->fails()) {
    		return response()->json([
    		    'status' => 'error',
    		    'result' => $validator->messages()           
    		], 200);    	   
    	}
    	
	    $apikey = base64_encode(str_random(40));
	    $user = User::create([
	    	'first_name'        => $data['first_name'],
	    	'last_name'         => $data['last_name'],
	    	'email'             => $data['email'],	    	
	    	'password'          => bcrypt($data['password']),
	    	'username'			=> $data['username'],
	    	'type'              => 'Citizen',
	    	'confirmation_code' => md5(uniqid(mt_rand(), true)),
	    	'active'            => 1,
	    	'confirmed'         => 1,
	        'cellphone' 		=> $data['cellphone'],
	        'verified'  		=> true
	    ]);
    	

    	return response()->json([
    	    'status' => 'success',
    	    'result' => [
    	        'api_key' 	=> $apikey,
    	        'message' 	=> 'Successfully authenticated.',
    	        'data' 		=> $user
    	    ]            
    	], 200);
    }

    public function login(Request $request)
    {
    	$data = json_decode($request->payload, true);
    	if(!$data){
    		$data = $request->all();
    	}

    	$validator = Validator::make($request->all(), [
    	    'username' 	=> 'required',
    	    'password' 	=> 'required'
    	]);

    	if ($validator->fails()) {
    		return response()->json([
    		    'status' => 'error',
    		    'result' => $validator->messages()           
    		], 500);    	   
    	}

    	$user = User::where('username', $request->username)->first();
    	if($user){
    		if(Hash::check($request->password, $user->password)){
    			return response()->json([
    			    'status' => 'success',
    			    'result' => $user          
    			], 200); 
    		}
    	}
    	else{
    		return response()->json([
    		    'status' => 'error',
    		    'result' => 'User does not exist'          
    		], 500);
    	}
    }
}
