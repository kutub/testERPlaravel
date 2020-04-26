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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator')->group( function(){
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
});


Route::prefix('home')->group(function(){

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/supplier', 'supplier\SupplierController');
    Route::resource('/category', 'products\CategoryController');
    Route::resource('/product', 'products\ProductsController');
    Route::resource('/customer', 'customers\CustomersController');

    Route::prefix('items')->group(function(){
        Route::post('/', 'ItemController@saveItem');
        Route::get('/unique', 'ItemController@checkUnique');
        Route::get('/categories', 'ItemController@categories');
        Route::get('/suppliers', 'ItemController@suppliers');
        Route::get('/attributes', 'ItemController@attributes');
        Route::get('/attribute/{id}', 'ItemController@attributeShow');
        Route::get('/{id}/attribute/create', 'ItemController@createAttribute');
        Route::post('/add-image', 'ItemController@uploadImage');
    });

    Route::get('/sales/{any?}', 'sales\SalesController@index')
    ->where('any', '.*');
    
});