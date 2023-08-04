<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// 

//Home Controller-------------------------------------------------------
Route::get('redirect',[HomeController::class,'redirect'])->middleware('auth');
Route::get('',[HomeController::class,'index']);
Route::get('show/{id}',[HomeController::class,'showProduct']);

Route::get('about_us',function(){
    return view('user.about.about');
});

//Cart Controller----------------------------------------------------
Route::get('cart',[CartController::class,'create'])->middleware('auth');
Route::post('AddToCart',[CartController::class,'addToCart']);
Route::delete('deleteOrder/{id}',[CartController::class,'delete']);

//Order Controller------------------------------------------
Route::get('place_order',[OrderController::class,'insert']);

//Contact_US Controller-------------------------------------------------
//create
Route::get('contactUs',[ContactUsController::class,'create'])->middleware('auth');
//store
Route::post('storeMessage',[ContactUsController::class,'store'])->middleware('auth');


//Admin--------------------------------------------------------------------------
Route::middleware('is_admin','auth')->group(function(){

    //all
    Route::get('products',[AdminController::class,'allProducts']);
    Route::get('Orders',[OrderController::class,'allOrders']);
    Route::get('contact',[ContactUsController::class,'allMessages']);


    //search
    Route::get('search',[AdminController::class,'search']);

    //create
    Route::get('create',[AdminController::class,'create']);
    Route::post('store',[AdminController::class,'store']);

    //edit
    Route::get('editProduct/{id}',[AdminController::class,'edit']);
    Route::put('updateProduct/{id}',[AdminController::class,'update']);

    //delete
    Route::delete('deleteProduct/{id}',[AdminController::class,'delete']);
    Route::delete('deleteorder/{id}',[OrderController::class,'delete']);
    
    
    Route::delete('deleteMessage/{id}',[ContactUsController::class,'delete']);

});