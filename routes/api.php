<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("posts", [PostController::class, "index"]);
Route::post("posts/create", [PostController::class, "store"]);
Route::put("posts/edit/{post}", [PostController::class, "update"]);
Route::delete("posts/delete/{post}", [PostController::class, "delete"]);

Route::post("/register", [UserController::class, "register"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
