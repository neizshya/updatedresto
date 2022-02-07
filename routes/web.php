<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,"index"]);

Route::get('/adm',[HomeController::class,"adm"])->name('admin');

#user
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);
Route::get('/user',[AdminController::class,"user"]);

##menu
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
Route::get('/menu',[AdminController::class,"menu"]);
Route::get('/tambah',[AdminController::class,"tambah"]);
Route::post('/updatemenu/{id}',[AdminController::class,"update"]);

Route::post('/uploadmakanan',[AdminController::class,"upload"]);


Route::get('/updateview/{id}',[AdminController::class,"updateview"]);


#reservasi
Route::post('/reservation',[AdminController::class,"reservation"]);

Route::get('/viewreservation',[AdminController::class,"viewreservation"]);
Route::get('/deletereser/{id}',[AdminController::class,"deletereser"]);


#chef
Route::get('/viewchef',[AdminController::class,"viewchef"]);

Route::post('/uploadchef',[AdminController::class,"uploadchef"]);

Route::get('/updatechef/{id}',[AdminController::class,"updatechef"]);

Route::post('/updatefoodchef/{id}',[AdminController::class,"updatefoodchef"]);

Route::get('/deletechef/{id}',[AdminController::class,"deletechef"]);
Route::get('/tambahchef',[AdminController::class,"tambahchef"]);





// Route::get('/redirects',[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
