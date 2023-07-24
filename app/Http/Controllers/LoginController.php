<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class LoginController extends Controller
{
    public function login_check(Request $request){

          $request->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')
            ->withSuccess('Signed in successfully');
            }
            return back()->with('error','Login details are not valid');

    }
}
