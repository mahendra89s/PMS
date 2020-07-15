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
            'user-type' => 'required|boolean',
        ]);
        
    }
    public function delete(Request $request,$id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
