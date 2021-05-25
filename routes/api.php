<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccinationController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

ROUTE::get('vaccinations',[VaccinationController::class, 'index']);
ROUTE::get('vaccinations/{id}',[VaccinationController::class, 'findById']);
ROUTE::get('vaccinations/seek/{searchterm}',[VaccinationController::class, 'findBySearchTerm']);

ROUTE::get('user/{id}',[\App\Http\Controllers\UserController::class,'findUserById']);
Route::post('auth/login',[\App\Http\Controllers\AuthController::class,'login']);

//Hier alle Routen rein geben, die nur für authentifizierte User zugänglich sein sollen
Route::group(['middleware'=>['api','auth.jwt']],function() {
    ROUTE::post('vaccination', [VaccinationController::class, 'new']);
    ROUTE::put('vaccination/{id}', [VaccinationController::class, 'update']);
    ROUTE::delete('vaccination/{id}', [VaccinationController::class, 'delete']);
    Route::post('auth/logout',[\App\Http\Controllers\AuthController::class,'logout']);
    ROUTE::put('user/{id}',[\App\Http\Controllers\UserController::class,'update']);
});
