<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //home page function

    public function home(){
        return view('client.home');
    }

    public function checkout(){
        return view('client.checkout');
    }

    public function cart(){
        return view('client.cart');
    }

    public function shop(){
        return view('client.shop');
    }

    public function login(){
        return view('client.login');
    }

    public function signup(){
        return view('client.signup');
    }
}
