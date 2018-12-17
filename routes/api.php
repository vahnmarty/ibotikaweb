<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register', function(){
	return view('frontend.api.register');
});
Route::post('user/http-register', [UserController::class, 'register']);
Route::get('user/register', [UserController::class, 'register']);
Route::post('user/register', [UserController::class, 'register']);
Route::get('user/login', [UserController::class, 'login']);