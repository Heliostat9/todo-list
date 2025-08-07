<?php

use App\Http\Controllers\Api\V1\TaskController as V1TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('tasks', V1TaskController::class);
});
