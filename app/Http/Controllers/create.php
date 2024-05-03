<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\l4sos;
use Illuminate\Routing\Controller;

class create extends Controller
{
    public function index(){
        return view('create');
    }
    
    public function savecourse(Request $request){
        $course= new l4sos();
        $course->name=$request->course;
        $course->details=$request->details;
        $course->save;
        return $course;
    }
}
