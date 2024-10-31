<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ExploreController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Frontend\HomeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



// Start Backend

Route::resource('/explore',ExploreController::class);
Route::resource('/about',AboutController::class);
Route::resource('/service',ServiceController::class);
Route::resource('/team',TeamController::class);



// End of Backend


//Start Login system



// End of login



// Start Frontend

Route::get("home",[HomeController::class,"index"])->name('raju');
Route::get("/about-us",[HomeController::class,"about"])->name("about-us");
Route::get("/contact",[HomeController::class,"contact"])->name("contact-us");
Route::get("/team_list",[HomeController::class,"team_list"]);
Route::get("/service-us",[HomeController::class,"service"])->name('service-us');
Route::get("/error",[HomeController::class,"error"]);
Route::get("/testimonial",[HomeController::class,"testimonial"]);
Route::get("/destination",[HomeController::class,"destination"]);
Route::get("/booking",[HomeController::class,"booking"]);
Route::get("/pakage_detail",[HomeController::class,"pakage_detail"])->name('pakage_detail');
// End of frontend



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
