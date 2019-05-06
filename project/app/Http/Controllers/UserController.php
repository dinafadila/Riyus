<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{
    public function edit($id)
{
    $user = Auth::find($id);
    return view('editprofile', compact('user'));
}


    public function update($id, Request $request)
{
    $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'phone'=> ['required', 'string', 'max:20'],
        'address' =>['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
 
    $user = User::find($id);
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->address=$request->address;
    $user->email = $request->email;
    $user->password=$request->password;
    $user->save();
    return redirect('/editprofile');
}

}
