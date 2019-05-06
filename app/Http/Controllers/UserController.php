<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function edit($id)
{
    $usr = User::where('id',$id)->first();
    return view('editprofile',compact('usr'));
}


    public function update($id, Request $request)
{
    $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'phone'=> ['required', 'string', 'max:20'],
        'address' =>['required', 'string', 'max:255'],
        'email' => 'required|email|max:255|unique:users,email,'.Auth::user()->id.',id'
    ]);
    $id = $request->input('id');
    $data=array(
        'name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'email'=>$request->input('email'),
    );

    User::find($id)->update($data);
    return redirect('/home');
}

}
