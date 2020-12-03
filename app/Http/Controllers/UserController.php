<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    public function show(User $user){
        $user->load('links');
        return view('users.show', ['user' => $user]);
    }
    
    public function edit(){
        return view('users.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request){

        $request->validate([
            'background_color' => 'required|size:7|starts_with:#',
            'text_color'       => 'required|size:7|starts_with:#'
        ]);
        
        Auth::user()->update($request->only(['background_color', 'text_color']));
        return back()->with(['success' => 'Changes saved successfully']);
    }

}
