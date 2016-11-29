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
Route::post('/authenticate', 'Auth\LoginController@authenticate');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/register', 'Auth\RegisterController@register');

Route::get('/login', 'Web\HomeController@login');

Route::get('/', 'Web\HomeController@index');

Route::get('/home/{categoria?}', 'Web\HomeController@home');

Route::get('/blog', 'Web\HomeController@blog');

Route::get('/contatos', 'Web\HomeController@contatos');

Route::get('/moda-do-momento', 'Web\HomeController@modaDoMomento');

Route::get('/list-products', 'Web\HomeController@listProducts');

Route::get('/cart', 'Web\HomeController@cart');

Route::get('/product-details/{products}', 'Web\HomeController@productDetails');

Route::get('/favorites', 'Web\HomeController@favorites');

Route::get('/account', 'Web\AccountController@index');
