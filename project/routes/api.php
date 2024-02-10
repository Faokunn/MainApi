<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

Route::post('add-user', [AccountsController::class, 'add']);
Route::post('edit-user', [AccountsController::class, 'updating']);
Route::get('view-user', [AccountsController::class, 'viewing']);
Route::delete('delete-user', [AccountsController::class, 'deleting']);