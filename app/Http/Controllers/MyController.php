<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Animal;
use Auth;

class MyController extends Controller
{
    public function showHomepage()
    {
        return view('homepage');
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'id_number' => 'required|min:4',
            'password' => 'required'
        ]);  

        $credentials = $request->only([
            'id_number', 'password'
        ]);

       if(Auth::attempt($credentials)){
            //success
            return redirect('/');
       }else{
          return view('login', [
              'loginError' => 'Invalid username or password!'
          ]);
       }
    }

    public function makeAnimal(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:animals'
        ], [
            'name.unique' => 'That name is already invented!'
        ]);

        $dy = Animal::create($request->only(['name']));

        return redirect()->back();
    }
}
