<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{d
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }
    function hasil(Request $request)
    {
        return view ('hasil');
    }
    function faktorial()
    {
        return view ('faktorial');
    }
    function showEts()
    {
        return view('ets');
    }
}

