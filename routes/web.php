<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipTypesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PeopleTypeController;
use App\Models\CheckIn;
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

Route::resource('people', PeopleController::class);

Route::get('/peopletypes', [PeopleTypeController::class, 'index']);
Route::get('/peopletypes/{peopleType}', [PeopleController::class, 'show']);

Route::get('/memberships/update', [MembershipController::class, 'updateStatus']);
Route::resource('memberships', MembershipController::class);

Route::get('/membershiptypes', [MembershipTypesController::class, 'index']);
Route::get('/membershiptypes/{membershipTypes}', [MembershipTypesController::class, 'show']);

Route::get('/cards/update', [CardController::class, 'updateStatus']);
Route::post('/cards/deduct', [CardController::class, 'deduct']);
Route::resource('cards', CardController::class);

Route::resource('checkins', CheckInController::class);
Route::patch('/checkins/{checkin}/checkout', [CheckInController::class, 'checkout']);
