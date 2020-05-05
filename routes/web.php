<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function() {

	Route::get('products-index', 'ProductController@index')
		->name('products.index')
		->middleware('permission:navegar products');
	Route::get('products/create', 'ProductController@create')
		->name('products.create')
		->middleware('permission:create products');
	Route::post('products', 'ProductController@store')
		->name('products.store')
		->middleware('permission:create products');
	Route::post('products/{product}', 'ProductController@update')
		->name('products.update')
		->middleware('permission:edit product');
	Route::get('products/{id}', 'ProductController@show')
		->name('products.show')
		->middleware('permission:show products');
	Route::get('products/{id}/edit', 'ProductController@edit')
		->name('products.edit')
		->middleware('permission:edit product');
	Route::get('products/{product}/destroy', 'ProductController@destroy')
		->name('products.destroy')
		->middleware('permission:destroy product');

		//usuarios--------------------------------------------------------------------
	Route::get('users-index', 'UserController@index')
		->name('users.index')
		->middleware('permission:navegar usuarios');
	Route::get('users/{id}', 'UserController@show')
		->name('users.show')
		->middleware('permission:show user');
	Route::put('users/{user}', 'UserController@update')
		->name('users.update')
		->middleware('permission:edit user');
	Route::get('users/{id}/edit', 'UserController@edit')
		->name('users.edit')
		->middleware('permission:edit user');

		//roles------------------------------------
	Route::get('roles-index', 'RoleController@index')
		->name('roles.index')
		->middleware('permission:navegar roles');
	Route::get('roles/create', 'RoleController@create')
		->name('roles.create')
		->middleware('permission:create roles');
	Route::post('roles', 'RoleController@store')
		->name('roles.store')
		->middleware('permission:create roles');
	Route::put('roles/{role}', 'RoleController@update')
		->name('roles.update')
		->middleware('permission:edit roles');
	Route::get('roles/{role}', 'RoleController@show')
		->name('roles.show')
		->middleware('permission:show roles');
	Route::get('roles/{role}/edit', 'RoleController@edit')
		->name('roles.edit')
		->middleware('permission:edit roles');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
