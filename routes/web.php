<?php

use App\Http\Controllers\main_controller;
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

Route::get('/', [main_controller::class, 'index']);
Route::get('/test', function () {
    return view('pages.test');
});
route::post('/component', [main_controller::class, 'add_layer1']);
route::get('/delete-component', [main_controller::class, 'delete_component']);
