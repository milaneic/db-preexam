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

Route::resource('people', PeopleController::class);

// Route::post('/people', [PeopleController::class, 'store']);
// Route::get('/people', [PeopleController::class, 'index']);
// Route::get('/people/create', [PeopleController::class, 'create']);
// Route::delete('/people/destroy/{person}', [PeopleController::class, 'destroy']);
// Route::get('/people/{person}', [PeopleController::class, 'show']);



Route::get('/peopletypes', [PeopleTypeController::class, 'index']);
Route::get('/peopletypes/{peopleType}', [PeopleController::class, 'show']);

// Route::get('/memberships', [MembershipController::class, 'index']);
// Route::get('/memberships/{membership}', [MembershipController::class, 'show']);
Route::resource('memberships', MembershipController::class);

Route::get('/membershiptypes', [MembershipTypesController::class, 'index']);
Route::get('/membershiptypes/{membershipTypes}', [MembershipTypesController::class, 'show']);


// Route::get('/cards', [CardController::class, 'index']);
// Route::get('/cards/{card}', [CardController::class, 'show']);

Route::resource('cards', CardController::class);


Route::get('/checkin', [CheckInController::class, 'index']);
Route::get('/checkin/{checkIn}', [CheckInController::class, 'show']);

Route::get('/checktypes', [CheckTypeController::class, 'index']);
Route::get('/checktypes/{checkType}', [CheckTypeController::class, 'show']);
