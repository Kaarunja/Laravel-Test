<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function sayhello()
    {
        return view('hello');
    }

    public function sayhi()
    {
        return 'This is say hi!';
    }

    public function sayhow()
    {
        $message = 'Laravel User its meeeeee';
        return view ('how',['message'=>$message]);
    }
}


