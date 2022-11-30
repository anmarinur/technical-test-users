<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavedUserController;
use Illuminate\Support\Facades\Http;

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
  $users = Http::get('https://jsonplaceholder.typicode.com/users')->collect();
  return view('usersDatatable')->with('users', $users);
});

Route::resource('/users', SavedUserController::class);