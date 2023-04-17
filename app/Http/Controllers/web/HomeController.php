<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('web.pages.about_us');
    }

    public function about_more(){
        return view('web.pages.about_us_more');
    }
}
