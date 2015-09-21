<?php

namespace Interviewer\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('home', [
            'company' => \Auth::user()->company,
        ]);
    }
}
