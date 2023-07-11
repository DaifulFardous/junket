<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourGroupController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*----------Admin_routes_start----------*/
Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class, 'index']);
    Route::get('/register',[AdminController::class, 'register']);
    Route::post('/register/create',[AdminController::class, 'registerCreate']);
    Route::post('/login/owner',[AdminController::class, 'login']);
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware('admin');
    Route::get('/logout',[AdminController::class, 'logout'])->middleware('admin');


});

/*----------Admin_routes_end----------*/

/*----------TourGroup_routes_start----------*/
Route::prefix('group')->group(function(){
    Route::get('/login',[TourGroupController::class, 'index']);
    Route::get('/register',[TourGroupController::class, 'register']);
    Route::post('/register/create',[TourGroupController::class, 'registerCreate']);
    Route::post('/login/owner',[TourGroupController::class, 'login']);
    Route::get('/dashboard',[TourGroupController::class, 'dashboard'])->middleware('group');
    Route::get('/logout',[TourGroupController::class, 'logout'])->middleware('group');
});

/*----------TourGroup_routes_end----------*/

require __DIR__.'/auth.php';