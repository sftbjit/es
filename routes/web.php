<?php

use App\Http\Controllers\AggregateController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SearchController;
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
Route::view('/', 'welcome');
Route::get('/search', [SearchController::class, 'show']);
Route::post('/search', [SearchController::class, 'search']);
Route::get('/list', ListController::class);
Route::get('/aggregations', AggregateController::class);
