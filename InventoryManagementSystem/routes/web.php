<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Member;

Route::get('/','PagesController@index');
Auth::routes();

Route::get('/id','PagesController@change');

Route::get('/home', 'HomeController@index')->name('home');
            
Route::resource('assets','AssetsController');
Route::get('/assets','AssetsController@index');

Auth::routes();

Route::resource('assetstock','AssetStocksController');
Route::get('/assetstock','AssetStocksController@index');
#Route::get('/assetstock/{{$assid}/edit','AssetStocksController@edit');
#Route::get('/assetstock/create','AssetStocksController@create');

Route::resource('assetinventory','AssetInventorysController'); 
Route::get('/assetinventory','AssetInventorysController@index');
Auth::routes();

Route::resource('group','GroupsController'); 
Route::get('/group/{id}','GroupsController@show');
Route::get('/group','GroupsController@index');

Auth::routes();

Route::get('/members','MembersController@index');
Route::get('/members/usage','MembersController@usage');
Route::resource('members','MembersController');
Route::get('/state/{id}','MembersController@state');
#Route::get('/members/{id}','MembersController@id');
#Route::get('/members/create','MembersController@create');

Route::resource('members','MembersController');
Auth::routes();


Route::resource('checkout','CheckOutController');
Route::get('sendMail','MailController@index');

