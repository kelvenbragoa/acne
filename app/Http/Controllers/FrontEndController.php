<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //


    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function cause(){

        return view('cause');
    }
}
