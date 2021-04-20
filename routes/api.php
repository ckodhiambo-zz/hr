<?php

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

Route::apiResource('company', \App\Http\Controllers\api\CompanyController::class);
Route::apiResource('department', \App\Http\Controllers\api\DepartmentController::class);
Route::apiResource('employee', \App\Http\Controllers\api\EmployeeController::class);
Route::apiResource('software', \App\Http\Controllers\api\SoftwareController::class);
Route::apiResource('hardware', \App\Http\Controllers\api\HardwareController::class);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
