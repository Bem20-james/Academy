<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;


class StudentsController extends Controller
{
    public function create(){
        return view('admin.pages.students.add_student');
    }

    public function view(){
        return view('admin.pages.students.view_students');
    }

}
