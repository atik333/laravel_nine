<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oneController extends Controller
{
    // public function text()
    // {
    //     return 'atik';
    // }
    public function text(Request $request)
    {
        dd($request->cookie());
    }
}
