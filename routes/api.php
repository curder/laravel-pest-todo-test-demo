<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todos/{todo}', [TodoController::class, 'show']);
Route::post('/todos', [TodoController::class, 'create']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::delete('/todos/{todo}', [TodoController::class, 'delete']);
