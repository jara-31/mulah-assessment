<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TableController::class, 'index']);