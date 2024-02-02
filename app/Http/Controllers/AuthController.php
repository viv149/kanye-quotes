<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function Index()
    {
        return view('register');
    }

    public function loginView() 
    {
        return view('login');
    }

    public function RegisterStore(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $register = new User();
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password = Hash::make($request->password);

        try{
            $register->save();
            return Redirect::route('quotes')->withInput(['success' => 'Registered successfully!']);
        }catch(Exception $e){
            return back()->withInput(['error' => $e->getMessage()]);
        }

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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('loginPage')->with(Auth::logout());
    }
}
