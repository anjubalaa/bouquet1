<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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


Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    
    return redirect('login');
});

Route::get('/admin', function () {
    return view('admin.home');

});

Route::get('/contact', function () {
    return view('user.contact');

});
Route::get('/about', function () {
    return view('user.about');

});
Route::get('/ch', function () {
    return view('change');

});

 Route::post("/change", [UserController::class,'chpass']);
//ADMIN 

Route::get("/viewproducts", [AdminController::class,'index']);

Route::get("/addproduct", [AdminController::class,'product']);

Route::post("/productread", [AdminController::class,'store']);

Route::get("editproduct/{id}", [AdminController::class,'edit']);

Route::post("/productedit/{id}", [AdminController::class,'update']);

Route::get("destroy/{id}", [AdminController::class,'destroy']);

Route::get("/cust", [AdminController::class,'custdetail']);

Route::get("/delecust/{id}", [AdminController::class,'delcust']);

Route::get("sea", [AdminController::class,'sea']);

Route::get("/orderview",[AdminController::class,'myOrder']);

Route::get('/admin.viewbooking',[Admincontroller::class,'booking']);

Route::get('/bills/{id}/{uid}/pay',[Admincontroller::class,'Pay']);

Route::get('/payment/{id}/{uid}',[Admincontroller::class,'paymentStatus']);

Route::get('/pay/{id}/{uid}',[Admincontroller::class,'deletepay']);

Route::get('/export_order',[Admincontroller::class,'exportorder']);





//USER


Route::view("/register", 'register');

Route::post("/login", [UserController::class,'login']);

Route::post("/register", [UserController::class,'register']);

Route::get("/", [ProductController::class,'index']);

Route::get("detail/{id}", [ProductController::class,'detail']);

Route::get("search", [ProductController::class,'search']);

Route::post("add_to_cart", [ProductController::class,'addToCart']);

Route::get("cartlist", [ProductController::class,'cartList']);

Route::get("removecart/{id}", [ProductController::class,'removeCart']);

Route::get("ordernow", [ProductController::class,'orderNow']);

Route::post("orderplace", [ProductController::class,'orderPlace']);

Route::get("myorder", [ProductController::class,'myOrder']);
