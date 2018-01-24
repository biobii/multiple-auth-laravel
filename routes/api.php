<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/admin/login', 'Api\Auth\ApiAuthController@adminLogin');
Route::post('/user/login', 'Api\Auth\ApiAuthController@userLogin');

Route::get('/admins', 'Api\Auth\ApiAuthController@listAdmins')->middleware('auth:admin-api');
Route::get('/users', 'Api\Auth\ApiAuthController@listUsers')->middleware('auth:api');
