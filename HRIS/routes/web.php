<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KIT506Controller; 

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

Route::get('/', [KIT506Controller::class, 'index'])->name('login'); 
Route::get('checklogin', [KIT506Controller::class, 'checklogin'])->name('checklogin'); 
Route::get('logout', [KIT506Controller::class, 'logout'])->name('logout'); 
Route::get('indexstudent', [KIT506Controller::class, 'indexstudent'])->name('indexstudent'); 
Route::get('indexstaff', [KIT506Controller::class, 'indexstaff'])->name('indexstaff'); 
Route::get('searchSSU', [KIT506Controller::class, 'searchSSU'])->name('searchSSU'); 
Route::get('searchSSS', [KIT506Controller::class, 'searchSSS'])->name('searchSSS'); 
Route::get('searchSSC', [KIT506Controller::class, 'searchSSC'])->name('searchSSC'); 
Route::get('searchSSCo', [KIT506Controller::class, 'searchSSCo'])->name('searchSSCo'); 

Route::get('searchStScc', [KIT506Controller::class, 'searchStScc'])->name('searchStScc'); 
Route::get('searchStSccR', [KIT506Controller::class, 'searchStSccR'])->name('searchStSccR');

Route::get('searchStScos', [KIT506Controller::class, 'searchStScos'])->name('searchStScos');
Route::get('searchStScosR', [KIT506Controller::class, 'searchStScosR'])->name('searchStScosR');

Route::get('searchStScs', [KIT506Controller::class, 'searchStScs'])->name('searchStScs'); 
Route::get('searchStScsR', [KIT506Controller::class, 'searchStScsR'])->name('searchStScsR');

Route::get('searchStScu', [KIT506Controller::class, 'searchStScu'])->name('searchStScu'); 
Route::get('searchStScuR', [KIT506Controller::class, 'searchStScuR'])->name('searchStScuR'); 

Route::get('searchStScc2', [KIT506Controller::class, 'searchStScc2'])->name('searchStScc2'); 
Route::get('searchStScc2R', [KIT506Controller::class, 'searchStScc2R'])->name('searchStScc2R'); 

Route::get('searchStScos2', [KIT506Controller::class, 'searchStScos2'])->name('searchStScos2'); 
Route::get('searchStScos2R', [KIT506Controller::class, 'searchStScos2R'])->name('searchStScos2R'); 

Route::get('searchStScs2', [KIT506Controller::class, 'searchStScs2'])->name('searchStScs2'); 
Route::get('searchStScs2R', [KIT506Controller::class, 'searchStScs2R'])->name('searchStScs2R');

Route::get('searchStScu2', [KIT506Controller::class, 'searchStScu2'])->name('searchStScu2');
Route::get('searchStScu2R', [KIT506Controller::class, 'searchStScu2R'])->name('searchStScu2R');

