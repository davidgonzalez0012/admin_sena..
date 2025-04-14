<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/index',[CourseController::class ,'vista']);
Route::post('/datos',[CourseController::class ,'insertar'])->name('insertar.datos');



Route::get('/consulta1',[OrmController::class ,'consultas1']);

Route::get('/consulta2',[OrmController::class ,'consultas2']);

Route::get('/consulta3',[OrmController::class ,'consultas3']);
Route::get('/consulta4',[OrmController::class ,'consultas4']);