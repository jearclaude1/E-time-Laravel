<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classroom;
use App\Models\Users;

class ClassroomController extends Controller
{
   public function Class()
   {
    $classroom = classroom::all(); 
    return view('class.class_page',['classroom' => $classroom]);
    }
   public function store(request $request )
    {
    $Class = new classroom();
    $Class->name=$request->name;
    $Class->detail=$request->detail;
    $Class->save();
    return redirect()->back();
   }
   
  public function destroy(int $id){
    $delete = classroom::findOrFail($id);
    $delete->delete();
    return redirect()->route('class.create');
  }
}
