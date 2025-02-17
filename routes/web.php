<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


// Route::apiResource('todo', TodoController::class);
Route::get("todo", [TodoController::class, "index" ]);
Route::post("todo", [TodoController::class, "store"]);
