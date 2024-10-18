<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.services');
    }
}