<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;


class LoginController extends Controller
{
    //

    public function sayhello(){
        return view('home');
    }

    function login()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:5'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request ->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('success');
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }
 
    function successlogin()
    {
        return view('success');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
