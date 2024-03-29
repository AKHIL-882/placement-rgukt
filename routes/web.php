<?php

use App\Http\Controllers\PlacementsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

if (env('APP_ENV') === 'production') {
    // URL::forceSchema('https');
}

// Route::get('/', [PlacementsController::class, 'index']);
// Route::get('/edit/{id}', [PlacementsController::class, 'edit']);
// Route::get('/show/{id}', [PlacementsController::class, 'show']);
// Route::get('/create', [PlacementsController::class, 'create']);
// Route::post('/store', [PlacementsController::class, 'store']);
// Route::post('/update/{id}', [PlacementsController::class, 'update']);
// Route::post('/delete/{id}',[PlacementsController::class, 'update']);

Route::resource('/',PlacementsController::class);
