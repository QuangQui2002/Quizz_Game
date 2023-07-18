<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\UserController;

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

Route::get('/questions/{id}',[QuestionController::class,'index']);
Route::post('/users', [UserController::class,'index']);
// Route::post('/questions', [QuestionController::class,'index']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/updateuser', [AuthController::class, 'updateuser']);
Route::get('/auth/ranker', [AuthController::class, 'ranker']);
Route::get('/auth/friends', [AuthController::class, 'friends']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/linhvuc',[QuestionController::class,'linhvuc']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
