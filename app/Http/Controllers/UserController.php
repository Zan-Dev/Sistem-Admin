<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function users(){
        $users = User::get();
        return view('pages.users.users', compact('users'));
    }
    
    function profile(){
        return view('pages.profile.my-profile');
    }

    function add(){
        return view('pages.users.tambah-user');
    }
 
    function delete($id){
        $penduduk = User::find($id);
        $penduduk->delete();
        return redirect()->route('users');
    }

    function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'min:3', 'unique:users,email,' . $id],
            'role' => 'required|in:Admin,User',
        ]);

        $user = User::find($id);        
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];            
        $user->save();

        return redirect()->route('profile')->with('success', 'User Updated Successfully!');
    }

    function changePassword(Request $request, $id){
        $user = User::find($id);

        $validatedData = $request->validate([
            'password' => ['required',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('The current password is incorrect.');
                    }
                },
            ],
            'newpassword' => ['required', 'min:3', 'different:password'],
            'renewpassword' => ['required', 'same:newpassword'],
        ]);

        $validatedData['newpassword'] = Hash::make($validatedData['newpassword']);
                      
        $user->password = $validatedData['newpassword'];            
        $user->save();

        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('login');  
    }

    function submit(Request $request){        

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'min:3', 'unique:users'],
            'role' => 'required|in:Admin,User',
            'password' => 'required|min:3',            
        ]);
        

        $validatedData['password'] = Hash::make($validatedData['password']);        

        User::create($validatedData);       

        return redirect()->route('users')->with('success', 'User Berhasil Ditambahkan!');
    }
}
