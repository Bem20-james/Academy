<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function processReg(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required | max:100',
            'last_name' => 'required | max:100',
            'gender' => 'required',
            'email' => 'required | email | max:100 | unique:users',
            'password' => 'required| max:20',
            'status' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'gender' => $request->gender,
            'role' => $request->role,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = "You have successfully created an account. Proceed to login.";
        return redirect()->route('login')->with('notification', $notification);
    }

    public function processLogin(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required | email | max:100',
            'password' => 'required | max:20',
        ]);

        if (Auth::attempt($data)) {
            if (auth()->user()->role == 4){
                return redirect()->route('students.dashboard');
            } elseif (auth()->user()->role == 3) {
                return redirect()->route('teacher.dashboard');
            } elseif (auth()->user()->role == 1 | auth()->user()->role == 2) {
                return redirect()->route('index');
            }
        } else {
            $notification = "Incorrect Login Details: Check and try again!";
            return redirect()->route('login')->with('notification', $notification);
        }
    }
}
