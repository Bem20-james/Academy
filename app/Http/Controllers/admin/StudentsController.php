<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   public function view(){
    return view('admin.pages.students.view_students');
   }
}
