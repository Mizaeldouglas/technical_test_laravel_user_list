<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/users-list', [UserController::class, "index"])->name('users.index');

