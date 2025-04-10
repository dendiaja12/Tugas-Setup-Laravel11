<?php

use App\Http\Controllers\CafeController;

Route::get('/cafes', [CafeController::class, 'index']);


