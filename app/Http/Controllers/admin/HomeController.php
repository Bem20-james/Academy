<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $meta = array();
        $meta['title'] = 'ADMIN | ACADEMIA';
        $meta['content'] = 'index';

        return view('admin.index')->with('meta', $meta);
    }
}
