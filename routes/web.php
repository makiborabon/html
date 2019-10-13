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

Auth::routes(['verify' => true]);

//Auth Route Group
Route::group([        
    'middleware' => ['auth', 'verified'],    
  ], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/get-billing-sub-type/{id}', 'BillingTypeController@getBillingSubType')->name('get.billing.sub.type');
    Route::resource('/billing', 'BillingController');
    Route::resource('/client', 'ClientController');
    Route::resource('/supplier', 'SupplierController');
    Route::resource('/inventory', 'InventoryController');
    Route::resource('/product-category', 'ProductCategoryController');
    Route::resource('/roles', 'RoleController');
    
  });


  