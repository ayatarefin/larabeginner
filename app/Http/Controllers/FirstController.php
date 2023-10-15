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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:55',
            'email' =>'required|max:80',
            'password' => 'required|min:6|max:12',
        ]);
        dd($request->all());
    }

}
