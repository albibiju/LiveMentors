<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $utype=Auth::user()->utype;
        if($utype=="admin")
        {
            return view('admin');
        }
        if($utype=="consultant")
        {
            return view('consultant');
        }
        else
        {
            return view('welcome');
        }

    }
}
