<?php

use App\Http\Controllers\Frontend\HomeController;
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

Route::get("/",[HomeController::class,"index"]);
Route::get("/about",[HomeController::class,"about"]);
Route::get("/contact",[HomeController::class,"contact"]);
Route::get("/team_list",[HomeController::class,"team_list"]);
Route::get("/service",[HomeController::class,"service"]);
