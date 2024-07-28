<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function users(){
        $users = User::get();
        return view('pages.users.users', compact('users'));
    }

    function add(){
        return view('pages.users.tambah-user');
    }

    function edit($id){
        $users = User::find($id);
        return view('pages.users.edit-user', compact('users'));
    }

    function delete($id){
        $penduduk = User::find($id);
        $penduduk->delete();
        return redirect()->route('users');
    }

    function update(Request $request, $id){
        $user = User::find($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;    
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users');
    }

    function submit(Request $request){        
        $user = new User();
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;    
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users');
        // return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
