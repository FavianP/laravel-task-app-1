<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;




Route::get('/', function () {
    return view('tasks.index');
});
Route::resource('task', TaskController::class);
Route::redirect('/', '/tasks');

