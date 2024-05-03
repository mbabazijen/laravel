<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\course;

Route::get('/', function () {
    return view('create');
});
Route::post('/create-course',[CourseController::class,'savecourse']);