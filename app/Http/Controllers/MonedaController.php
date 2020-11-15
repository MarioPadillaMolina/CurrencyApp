<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function index()
    {
        return view('moneda.index');
    }

    public function show(Moneda $moneda)
    {
        return view('moneda.show');
    }

}
