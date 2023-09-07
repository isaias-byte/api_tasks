<?php

use App\Http\Controllers\TaskController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//! Routes for the technical exam
Route::get('pendingTasks', [TaskController::class, 'pendingTasks']);
Route::get('pendingCompanyTasks', [TaskController::class, 'pendingCompanyTasks']);
Route::get('assignedTasks', [TaskController::class, 'assignedTasks']);