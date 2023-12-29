<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',   
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'

        ]);
        //password encrypt
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}