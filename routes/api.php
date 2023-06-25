<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\KomentarController;
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
route::get('/', function (){
    echo env('APP_NAME');
});

route::get('/users', [UsersController::class,'index']);
route::get('/users/{id}', [UsersController::class,'show']);
route::post('/users', [UsersController::class,'store']);
route::put('/users', [UsersController::class,'update']);
route::delete('/users', [UsersController::class,'destroy']);

route::get('/postings', [UsersController::class,'index']);
route::get('/postings/{id}', [UsersController::class,'show']);
route::post('/postings', [UsersController::class,'store']);
route::put('/postings', [UsersController::class,'update']);
route::delete('/postings', [UsersController::class,'destroy']);

route::get('/komentars', [UsersController::class,'index']);
route::get('/komentars/{id}', [UsersController::class,'show']);
route::post('/komentars', [UsersController::class,'store']);
route::put('/komentars', [UsersController::class,'update']);
route::delete('/komentars', [UsersController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
