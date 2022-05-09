<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipTypesController;
use App\Http\Controllers\PeopleController;
use Brick\Math\RoundingMode;
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

Route::get('/', [PeopleController::class, 'index']);

Route::get('/memberships', [MembershipController::class, 'index']);
Route::get('/membershiptypes', [MembershipTypesController::class], 'index');
Route::get('/cards', [CardController::class, 'index']);
