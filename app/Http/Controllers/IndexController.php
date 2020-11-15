<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() 
    {
        return view('index');
    }
    
    function fallback()
    {
        $response = ['op' => 'fallback'];
        return redirect('/')->with($response);
    }
}