<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class userController extends Controller
{
    public function user_page(){
        $Users = Users::all();
        return view('user.user_page',['Users'=> $Users]);
      }

    public function store(request $request ){
        $data = $request->validate([
        
            'username'=>'required',
            'telephone'=>'required',
            'stutus'=>'required',
            'role'=>'required'
            
        ]);
    $newUser =Users::create($data);
    return redirect()->route('user.create');
    
  }
  public function destroy(int $id){
    $delete = Users::findOrFail($id);
    $delete->delete();
    return redirect()->route('user.create');
  }
  public function update(int $id){
    $update = Users::findOrFail($id);
    return view('user.user_page_update',compact('update'));
  }
  public function updated(request $request, int $id){
       
    $request->validate([
            'username' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);
        $user = Users::findOrFail($id);

        $user->name = $request->username;
        $user->telephone = $request->telephone;
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'User updated successfully');
  
  }
}