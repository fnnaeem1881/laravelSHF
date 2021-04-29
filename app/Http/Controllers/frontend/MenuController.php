<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function talent(){
        return view('frontend.talent');
    }

    public function accivment(){
        return view('frontend.accivment');
    }

    public function gellary(){
        return view('frontend.gellary');
    }

    public function publication(){
        return view('frontend.publication');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function shop(){
        return view('frontend.shop');
    }

    public function jobs(){
        return view('frontend.jobs');
    }

    public function profile(){
        return view('frontend.profile');
    }

    public function login(){
        return view('frontend.login');
    }

    public function register(){
        return view('frontend.register');
    }

    public function checkout(){
        return view('frontend.checkout');
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function donate(){
        return view('frontend.donate');
    }

    public function becomevolunteer(){
        return view('frontend.becomevolunteer');
    }

}
