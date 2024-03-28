<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Invoke pada Controller hanya menggunakan 1 method saja, biasanya digunakan di Home dan Dashboard.
     */
    
    public function __invoke(Request $request)
    {
        return view('home');
    }
}
