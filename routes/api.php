<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

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
Route::get('/posts',[PostsController:: class,'getPosts']);
Route::get('/comments',[CommentsController:: class,'getComments']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
