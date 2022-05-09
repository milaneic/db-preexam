<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\CheckTypeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipTypesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PeopleTypeController;
use App\Models\CheckIn;
use App\Models\CheckType;
use App\Models\People;
use App\Models\PeopleType;
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

Route::get('/people', [PeopleController::class, 'index']);
Route::get('/peopletypes', [PeopleTypeController::class, 'index']);
Route::get('/memberships', [MembershipController::class, 'index']);
Route::get('/membershiptypes', [MembershipTypesController::class, 'index']);
Route::get('/cards', [CardController::class, 'index']);
Route::get('/checkin', [CheckInController::class, 'index']);
Route::get('/checktypes', [CheckTypeController::class, 'index']);
