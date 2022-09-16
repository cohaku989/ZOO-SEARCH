<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ZooController;
use App\Http\Controllers\TopController;
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


//auth:users settings
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//auth:admin settings
Route::prefix('admin')->name('admin.')->group(function(){
    
     Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard');
    
    require __DIR__.'/admin.php';
});

Route::middleware('auth')->group(function () {
    Route::get('/myposts', [PostController::class, 'archive']);
    Route::get('/myposts/create', [PostController::class, 'create']);
    Route::get('/myposts/{post}', [PostController::class, 'show']);
    Route::get('/myposts/{post}/edit', [PostController::class, 'edit']);
    Route::post('myposts', [PostController::class, 'store']);
    Route::put('/myposts/{post}', [PostController::class, 'update']);
    Route::delete('/myposts/{post}', [PostController::class, 'delete']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/zoos', [ZooController::class, 'archive']);
    Route::get('/zoos/create', [ZooController::class, 'create']);
    Route::get('/zoos/{zoo}/edit', [ZooController::class, 'edit']);
    Route::post('zoos', [ZooController::class, 'store']);
    Route::put('/zoos/{zoo}', [ZooController::class, 'update']);
    Route::delete('/zoos/{zoo}', [ZooController::class, 'delete']);
});

Route::get('/zoos/{zoo}', [ZooController::class, 'show']);

Route::controller(TopController::class)->group(function(){
    Route::get('/', 'show_place');
    Route::get('/top_animals', 'show_animals');
    Route::get('/top_price', 'show_price');
});