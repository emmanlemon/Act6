<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Act;
use App\Http\Controllers\Act05;

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
//Hompage
Route::get('/home', function () {
    return view('name');
});

//activity 1 routing name
Route::get('/name', function () {
    return view('act01.MyName');
});

//activity2 Create a routes that uses two types of redirect method
//name Routes
route::get('/act2', function () {
    return redirect('exercise2');
});

route::redirect('exercise2', '/name');

//direct routes with naming
Route::get('act02' , [Act::class , 'activity2'])->name('act02');


//activity3 using required parameter:Create routes that will display your Name,id and address.
Route::get('act3/{name}/{id}/{address}', function ($name,$id,$address) {
    return "My name is:${name} <br> My ID:${id}<br> From:${address}";
});

//activity 4 create routes that will display your name,id and address(1st output must have value with your name,id and address 2nd output must have a null value)
//1st output
Route::get('/act04/{name?}/{id?}/{address?}', function ($name="Emmanuel Joshua A. Lemon", $id="0720", $address="Brgy Rizal Ave. San Carlos City,Pangasinan") {
    return "My name is ${name} <br> Id number: ${id} <br> From: ${address}";
 });

//2nd output
Route:: get('/act4/{name?}/{id?}/{address?}' , function ($name=null, $id=null, $address=null) {
    if(isset($name) || isset($id) || isset($address)){
        return "My name is ${name} <br> Id number: ${id} <br> From: ${address}";
    }
    return "You have nothing input";
 });

 //act 5
Route:: get('/', [Act05::class, 'index']);
Route::get('/activity05.Item/{ItemNo?}/{Name?}/{Price?}', [Act05::class, 'Item'])->name('Item');
Route::get('activity05.Customer/{Customer?}/{Name?}/{Address?}', [Act05::class, 'Customer'])->name('Customer');
Route::get('activity05.Order_details/{Transpo?}/{Orderno?}/{Itemid?}/{Name?}/{Price?}/{Qty?}/', [Act05::class, 'Order_details'])->name('Order_details');
Route::get('activity05.Order/{CustomerID?}/{Name?}/{Ordernumber?}/{Date?}',[Act05::class, 'Order'])->name('Order');

