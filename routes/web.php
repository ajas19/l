<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\superController;


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

Route::get('/', function () {
    return view('welcome');
});




        Route::get('/register',[userController::class,'viewregForm'])->name('viewRegister');
        Route::post('/register',[userController::class,'regForm'])->name('RegisterUser');
       
        Route::get('/login',[userController::class,'viewlogin'])->name('login');
        Route::post('/login',[userController::class,'checklogin'])->name('clogin');

        Route::view('/home','home')->name('home1')->middleware('auth');
        Route::get('/iteam',[superController::class,'viewiteam']);
        Route::post('/iteam',[superController::class,'regiteam']);

    


    






