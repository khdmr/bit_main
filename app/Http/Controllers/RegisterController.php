<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function register(Request $request)
    {
        $ValidatedData =  $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:3', 'max:255', 'unique:users'], 
            // 'no_telp' => ['required', 'min:10', 'max:13' ,'unique:users'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        
        User::create($ValidatedData);

        return redirect('/login')->with('success', 'Registration Successfull please login');
    }
}
