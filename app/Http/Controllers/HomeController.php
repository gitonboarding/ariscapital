<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function team(){
        return view('frontend.team');
    }

    public function board(){
        return view('frontend.board');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function important_information(){
        return view('frontend.important-information');
    }
}
