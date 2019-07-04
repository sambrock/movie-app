<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function test()
    {
        $testVar = "Hello world";
        return view('welcome')->with('testVar', $testVar);
    }
}
