<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserEdDelController extends Controller
{
    public function edit(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'user_type' => 'required|boolean',
        ]);
        
        
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
        ]);
        return redirect()->back();
    }
    public function delete(Request $request,$id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function show($id){
        $user = User::find($id);
        return view('Admin.user.edit',compact('user'));
    }
}
