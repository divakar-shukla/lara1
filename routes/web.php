<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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



Route::get('/', [UserController::class, 'showAll']);
Route::get('paginate', [UserController::class, 'paginate']);
Route::get('user/{id?}',[userController::class, 'showUser']);
Route::get('insert',[userController::class, 'insertData']);
Route::post('addUser',[PageController::class, 'insertdata']);
Route::view('insertform', 'insert_form')->name('AddData');
Route::view('update', 'insert_form')->name('AddData');
Route::get("join", [UserController::class, "joinMethod"]);
Route::get("count", [UserController::class, "countMethod"]);
Route::view("add_user", "form_validate");
Route::post("validate",[UserController::class, "validate"])->name("validate");