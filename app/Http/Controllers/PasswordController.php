<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordController extends Controller
{
	public function index($id)
    {
    	$user_id = User::find($id);
    	return view('profiles.change_pass')->with('user_id',$user_id);
    }
    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
        'password' => 'required|string|min:8|confirmed'
    ]);
    	$user = User::find($id);
    	$user->password = Hash::make($request->password);
    	$user->save();
    	return redirect()->route('change_password',['id' => $id])->with('message','Password Updated Successfully');
    }
}
