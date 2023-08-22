<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index () {
        return view('partials.register');
    }

    function regs (Request $request) {
        
    
        $ValidatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        User::Create($ValidatedData);

        return redirect('/login')->with('success', 'Registrasi Sukses');
    }
}
