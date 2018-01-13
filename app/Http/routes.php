<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'KategoriController@index');

Route::get('/home', 'HomeController@profile');

Route::get('/kategori/search', 'KategoriController@searchKomunitas');

Route::get('/kategori/search/{komunitas_id}','KomunitasController@details');

Route::get('/join', 'KomunitasController@joinMember');

Route::get('/join/{komunitas_id}', 'KomunitasController@transaction');

Route::get('/admin/home', 'adminController@home');

Route::get('/admin/accept/{transaction_id}', 'adminController@accepted');

Route::get('/admin/reject/{transaction_id}', 'adminController@rejected');

Route::get('/statusUser', 'HomeController@status');

Route::get('/inputPage', 'adminController@inputPage');

Route::post('/inputCommunity', 'adminController@inputCommunity');

Route::get('/inputCategory', 'adminController@inputCategories');

Route::post('/inputKategorinya', 'adminController@inputKategorinya');