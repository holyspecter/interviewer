<?php

namespace Interviewer\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'company' => \Auth::user()->company,
        ]);
    }
}
