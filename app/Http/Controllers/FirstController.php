<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function country()
    {
        return view('country');
    }

    public function studentstore(Request $request)
    {
        dd($request->all());
    }

    public function aboutstore(Request $request)
    {
        dd($request->all());
    }

}
