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
      'name' => 'required|string|max:255',
      'telephone' => 'required|string|max:255',
      'status' => 'required|string|max:255',
      'role' => 'required|string|max:255',
  ]);

  // Find the user by ID
  $user = Users::findOrFail($id);

  // Update the user's attributes
  $user->name = $request->input('name');
  $user->telephone = $request->input('telephone');
  $user->status = $request->input('status');
  $user->role = $request->input('role');

  // Save the updated user
  $user->save();

  // Redirect back with success message
  return redirect('user.user_page')->with('success', 'User updated successfully');

  }
}