<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Routing\Controller;

class courseController extends Controller
{
 public function savecourse(request $request){
    $course=new course();
    $course->name=$request->username;
    $course->detail=$request->details;
    $course->save();
    return redirect('/get-course');
 }
 public function index (){
   
    $getcourse= Course::all();
    return view('course',['course'=>$getcourse]);
 }
 public function getUpdateCoursefrm($id){
   
 }
}
