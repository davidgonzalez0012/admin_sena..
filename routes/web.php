<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/index',[CourseController::class ,'vista']);
Route::post('/datos',[CourseController::class ,'insertar'])->name('insertar.datos');