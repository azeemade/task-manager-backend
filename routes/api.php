<?php

use App\Http\Controllers\v1\Tasks\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::group(['middleware' => ["auth"]], function () {
//     //Logout Route
//     Route::get('auth/signout', [AuthenticationController::class, 'signout']);

//     Route::group(["prefix" => "tasks"], function () {
//         Route::get('/', [TaskController::class, 'index']);
//         Route::get('/show', [TaskController::class, 'show']);
//         Route::post('/create', [TaskController::class, 'create']);
//         Route::put('/update', [TaskController::class, 'update']);
//         Route::delete('/destroy', [TaskController::class, 'destroy']);
//     });
// });