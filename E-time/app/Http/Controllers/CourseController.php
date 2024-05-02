<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function Course(){
        $course = course::all();
        return view('course.course_page',['course'=>$course]);
       }
    
   public function store(request $request ){
    $Class = new course();
    $Class->name=$request->name;
    $Class->save();
    return redirect()->back();
}

public function destroy(int $id){
    $delete = course::findOrFail($id);
    $delete->delete();
    return redirect()->route('course.create');
}
}
