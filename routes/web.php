<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AddplantController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashLayoutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/layout",[LayoutController::class,"layoutfun"]);
Route::get("/",[IndexController::class,"indexfun"]);
Route::get("/about",[AboutController::class,"aboutfun"]);
Route::get("/contactus",[ContactusController::class,"contactusfun"]);
Route::get("/shop",[ShopController::class,"shopfun"]);
Route::get("/cart",[CartController::class,"cartfun"]);
Route::get("/Dash-layout",[DashLayoutController::class,"dashlayoutfun"]);
Route::get("/dashboard",[HomeController::class,"homefunc"]);
Route::get("/dashboardaddform",[AddplantController::class,"dashhomeform"]);

