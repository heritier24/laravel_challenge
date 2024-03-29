<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TypesController;
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

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/postemployees', [EmployeeController::class, 'store']);
Route::put('/update-employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/delete-employee/{id}', [EmployeeController::class, 'delete']);

Route::post('/post-types', [TypesController::class, 'store']);
Route::get('/types', [TypesController::class, 'index']);
