<?php

use App\Api\V1\Http\Controllers\Amenities\AmenitiesController;
use App\Api\V1\Http\Controllers\Room\RoomController;
use App\Api\V1\Http\Controllers\Service\ServiceController;
use App\Api\V1\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/{id}', [UserController::class,'show']);
Route::get('/users', [UserController::class,'index']);

Route::get('/room/{id}', [RoomController::class,'show']);
Route::get('/rooms', [RoomController::class,'index']);
Route::get('/rooms/available', [RoomController::class, 'availableRooms']);


Route::get('/services/{id}', [ServiceController::class,'show']);
Route::get('/services', [ServiceController::class,'index']);

Route::get('/amenities/{id}', [AmenitiesController::class,'show']);
Route::get('/amenities', [AmenitiesController::class,'index']);


