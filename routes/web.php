<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PhotosController;
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

// Route::resource('albums', AlbumsController::class);

Route::resources([
	'albums' => AlbumsController::class,
    'photos' => PhotosController::class,
]);

Route::get('/photos/create/{id}', 'App\Http\Controllers\PhotosController@create');
