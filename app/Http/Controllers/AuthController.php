<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function Index()
    {
        $auth = User::all();
        // dd($auth);
        return view('login');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return Redirect::route('quotes')->withInput(['success' => 'Login Successfull']);
        }
        else
        {
            return Redirect::back()->withInput(['error' => 'Email or Password invalid']);
        }
    }
}
