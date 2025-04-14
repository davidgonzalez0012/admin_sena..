<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function vista(){

        return view('form');

    }

public function insertar(request $request){

    $curso = new Course();
    $curso->course_number = $request->course_number;
    $curso->day = $request->day;
    $curso->save();

    
    return $curso;
}
}
