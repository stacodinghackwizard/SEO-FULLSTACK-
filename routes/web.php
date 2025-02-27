<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/news', function () {
    return view('welcome');
});


Route::get('/new', [TestController::class, 'controllerMethod']);
// Route::get('/new', 'TestController@controllerMethod');

Route::any('{slug}', function() {
    return view('welcome');
});