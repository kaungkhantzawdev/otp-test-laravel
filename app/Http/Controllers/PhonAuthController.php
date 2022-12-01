<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonAuthController extends Controller
{
    public function index(){
        return view('/welcome');
    }
}
