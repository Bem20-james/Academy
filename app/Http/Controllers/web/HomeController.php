<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function index2(){
        return view('index2');
    }

    public function about(){
        return view('web.pages.about_us');
    }

    public function courses(){
        return view('web.pages.courses');
    }
}
