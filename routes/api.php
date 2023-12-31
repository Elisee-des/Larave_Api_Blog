<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("posts", [PostController::class, "index"]);

Route::post("/register", [UserController::class, "register"]);
Route::post("/login", [UserController::class, "login"]);


Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::post("posts/create", [PostController::class, "store"]);
    Route::put("posts/edit/{post}", [PostController::class, "update"]);
    Route::delete("posts/delete/{post}", [PostController::class, "delete"]);
    
});
