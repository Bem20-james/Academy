<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TeachersController extends Controller
{
    public function create(){
        return view('admin.pages.instructors.add_instructor');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|max:20',
            'gender' => 'required|string|max:20',
            'status' => 'required|integer|max:3',
            'role' => 'required|integer|max:5',
            'department' => 'required|string|max:5',
        ]);
        dd('instr');

        $password = Str::random(8);
        // dd($password);

        DB::table('users')->insert([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'gender' => $request->gender,
            'role' => $request->role,
            'email' => $request->email,
            'department' => $request->department,
            'status' => $request->status,
            'password' => Hash::make($password),
        ]);
        $notification = "You have successfully added a Teacher";
        return redirect()->route('admin.dashboard')->with('notification', $notification);
    }

    public function view(){
        // $instructors = DB::table('users')->where('role', '=', 3)->get();
        // return view('admin.pages.instructors.view_instructors')->with('instructors', $instructors);
        return view('admin.pages.instructors.view_instructors');
    }
}
