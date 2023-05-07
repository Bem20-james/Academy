<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Classes;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    public function create(){
        $meta = array();
        $meta ['title'] = 'ADMIN | Add Class';
        $meta ['content'] = 'index';

        return view('admin.pages.classes.add')->with('meta', $meta);
    }

    public function view(){
        $meta = array();
        $meta ['title'] = 'ADMIN | Add View';
        $meta ['content'] = 'index';

        return view('admin.pages.classes.view')->with('meta', $meta);
    }

    public function store(Request $request){
        $this->validate($request, [
            'class' => 'required | max:40 | string',
            'class_teacher' => 'required | max:30 | string',
        ]);

        $class = new Classes;
        // $class->post_author = Auth::user()->id;
        $class->class = $request->class;
        $class->class_teacher = $request->class_teacher;
        $class->save();

        $notification = "Class created successfully";
        return redirect()->route('view.classes')->with('status', $notification);
    }
}
