<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CricketController extends Controller
{
    public function welcome(){
        return view('pages.welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

}
