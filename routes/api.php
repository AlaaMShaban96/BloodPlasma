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
Route::get('blood/','Api\BloodController@index' );
Route::get('getToken/','Api\SeteingController@getToken' );
Route::get('city/','Api\CityController@index' );
Route::get('benefactor/','Api\BenefactorController@index' ); 
Route::post('benefactor', 'Api\BenefactorController@store');
Route::delete('benefactor/{benefactor}', 'Api\BenefactorController@destroy');
Route::delete('benefactor/{remember_token}/all', 'Api\BenefactorController@destroyAll');