<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moneda;

class IndexController extends Controller
{
    function index()
    {
        $monedas = Moneda::all(); //enviamos la monedas al index
        return view('index', ['monedas' => $monedas]);
    }
    
    function fallback()
    {
        $response = ['op' => 'fallback'];
        return redirect('/')->with($response);
    }
}