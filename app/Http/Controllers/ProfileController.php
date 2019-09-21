<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($id)
    {
    	$user_id = User::find($id);
    	return view('profiles.show')->with('user_id',$user_id);
    }

    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
        'name' => 'required|unique:posts|max:255',
        'email' => 'required',
    ]);
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->save();
    	return redirect()->route('home');
    }
}
