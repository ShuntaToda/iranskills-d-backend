<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\LoginController;
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

Route::get("login", [LoginController::class, "index"])->name("login");
Route::post("login", [LoginController::class, "login"])->name("login");
Route::get("logout", [LoginController::class, "logout"])->name("logout");


Route::as("admin.")->middleware("auth")->group(function () {
    Route::get('/', [CompanyController::class, "index"])->name("home");

    Route::prefix('courier')->as("courier.")->group(function () {
        Route::get("index", [CourierController::class, "index"])->name("index");
        Route::get("create", [CourierController::class, "create"])->name("create");
        Route::post("create", [CourierController::class, "store"])->name("create");
        Route::get("show/{id}", [CourierController::class, "show"])->name("show");
    });
});
