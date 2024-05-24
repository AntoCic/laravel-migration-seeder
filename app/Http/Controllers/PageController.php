<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $saluto = 'CIAO MONDO';
        return view('index', compact('saluto'));
    }
}
