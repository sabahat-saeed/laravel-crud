<?php

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

Route::get('/', function () {
    return view('users/usersList');
});
Route::get('add-users', function () {
    return view('users/addUserForm');
});
Route::get('edit-users', function () {
    return view('users/editUserForm');
});
Route::get('login', function () {
    return view('auth/login');
});
