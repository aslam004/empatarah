<?php

use App\Models\Head;
use App\Models\menu;
use App\Models\AboutUs;
use App\Models\Concept;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardHeadController;

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

Route::get('/', [HeadController::class,'index']);

//ADMIN//
Route::get('/admin', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//DASHBOARD//

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::resource('/admin/head', DashboardHeadController::class)->middleware('auth');