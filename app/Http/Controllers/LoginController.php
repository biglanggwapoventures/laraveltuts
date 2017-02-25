<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('login.form');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4|max:20|exists:users',
            'password' => 'required'
        ], [
            'username.exists' => 'Your :attribute is not registered!'
        ]);

        $credentials = $request->only(['username', 'password']);

        $loggedIn = Auth::attempt($credentials);
        if($loggedIn){
            return redirect('/');
        }else{
            return view('login.form', [
                'loginError' => 'Incorrect username or password'
            ]);
        }
    }
}
