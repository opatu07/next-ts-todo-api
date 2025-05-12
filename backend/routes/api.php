<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['api'])->group(function () {
    Route::resource('todo', TodoController::class);
});
