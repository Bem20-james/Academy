<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\admin\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DepartmentsController extends Controller
{
    public function create(){
        $meta = array();
        $meta['title'] = 'ADMIN | ADD DEPARTMENT';
        $meta['content'] = 'index';

        $dept = Department::all();
        return view('admin.pages.department.create')->with('meta', $meta)->with('dept',$dept);
       }

       public function view(){
        $meta = array();
        $meta['title'] = 'ADMIN | ADD DEPARTMENT';
        $meta['content'] = 'index';

        $dept = Department::all();
        return view('admin.pages.department.view')->with('meta', $meta)->with('dept',$dept);;
       }

       public function store(Request $request){
        $request->validate([
            'department' => 'required',
        ]);
        $department = new Department;
        $department->post_author = User::find(Auth::id());
        $department->department = $request->department;
        $department->status = $request->status;
        $department->desc = $request->desc;
        $department->created_at = now();
        $department->save();
        $notification = "Department Added Successfully!!!";
        return redirect()->route('view.department')->with('status', $notification);
       }


        public function edit(Department $department, $id)
        {
            $meta = array();
            $meta['title'] = 'ADMIN | EDIT DEPARTMENT';
            $meta['content'] = 'index';

            $department = Department::find($id);

            return view('admin.pages.department.edit', compact('department'))->with('meta',$meta);
        }

        public function update(Request $request, Department $department, $id)
        {
            $request->validate([
            'department' =>  'required',
            'status' =>  'required',
            'desc' =>  'required',
        ]);

            $department = Department::find($id);
            // dd($department);
            $department->department = $request->department;
            $department->status = $request->status;
            $department->desc = $request->desc;
            $department->save();

            return redirect()->route('view.department');

        }

        public function delete($id){
            $department = Department::find($id);
                $department->delete($id);

                $notification = "Department deleted successfully";
                return redirect()->route('view.department')->with('status', $notification);
            }
        }

