<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

//Authentication for all user
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/myprofile','App\Http\Controllers\ProfileController@myprofile')->name('profile.myprofile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Authentication for committee
Route::group(['middleware' => ['auth','role:committee']], function(){
    Route::get('/profile/allUser','App\Http\Controllers\ProfileController@allUser')->name('profile.allUser');
});

Route::group(['middleware' => ['auth','role:student']], function(){
    
});

Route::group(['middleware' => ['auth','role:lecturer']], function(){
    
});

Route::group(['middleware' => ['auth','role:coordinator']], function(){
    
});

Route::group(['middleware' => ['auth','role:dean']], function(){
    
});

Route::group(['middleware' => ['auth','role:hosd']], function(){
    
});




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
