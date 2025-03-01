<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ShopController;
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

Route::get('hello', function () {
    return response()->json(['message' => env('APP_NAME')]);
});

Route::middleware('auth:api')->prefix('v1')->group(function () {

    // get user profil
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // get all shops and detail of shop
    Route::get('shops', [ShopController::class, 'index']);
    Route::get('shops/{shop}', [ShopController::class, 'show']);

    // get elevation
    Route::get('elevation', [PlantController::class, 'elevation']);

    // predict
    Route::post('predict', [PlantController::class, 'predict']);

    // logout
    Route::delete('logout', [AuthController::class, 'logout']);
});

// login and logout

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
