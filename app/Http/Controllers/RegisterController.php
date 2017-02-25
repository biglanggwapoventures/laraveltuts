<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register.form');
    }

    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4|max:20|unique:users',
            'fullname' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = new User;
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();

        session()->flash('registered', true);
        return redirect('/');

    }
}
