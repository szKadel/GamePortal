<?php

use App\Http\Controllers\UserController;
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


Route::get('/', [\App\Http\Controllers\Home\MainPage::class,'getMain'])
    ->name('home.mainPage');

Route::get('users', [\App\Http\Controllers\UserController::class, 'list'])
    ->name('get.users');

Route::get('users/{userId}', [UserController::class, 'show'])
    ->name('get.user.show');

//Route::get('users/{id}/profile', 'User\ProfilController@show')
//    ->name('get.user.profile');

Route::get('users/{id}/address', [\App\Http\Controllers\User\ShowAddress::class])
    ->where(['id' => '[0-9]+'])
    ->name('get.users.address');

