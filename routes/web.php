<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TasksController;


Route::get('/', [PagesController::class, "mainPage"]);
Route::get('/task/{id}', [PagesController::class, "taskPage"]);
Route::post('/add', [TasksController::class, "addTask"]);
Route::post('/task/do', [TasksController::class, "doTask"]);
Route::get('/task/{id}/update', [PagesController::class, "updatePage"]);
Route::post('/task/update', [TasksController::class, "updatePage"]);

