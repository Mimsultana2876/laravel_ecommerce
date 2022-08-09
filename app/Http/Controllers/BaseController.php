<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('front.index');
    }

    public function specialoffer(){
        return view('front.specialoffer');
    }

    public function delivery(){
        return view('front.delivery');
    }

    public function contact(){
        return view('front.contact');
    }

    public function cart(){
        return view('front.contact');
    }

    public function productview(){
        return view('front.contact');
    }

}
