<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;

class BlogcategoryController extends Controller
{
    public function create()
    {
        $blogcategories = Category::all();
        return view('students.pages.blog-categories.create')->with('blogcategories', $blogcategories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | string | max:200',
            'image' => 'required | image | mimes:jpg,png,jpeg,gif,svg|max:10000',
            'description' => 'required| string | max:1000'
        ]);

        $blogcategory = new Category;
        $blogcategory->name = $request->name;
        $blogcategory->description = $request->description;
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $file = $request->image;
            $file_new_name = $request->title . time();
            $file->move('web/images/blog/', $file_new_name . "." . $extension);
            $blogcategory->image = 'web/images/blog/' . $file_new_name . "." . $extension;
        }
        $blogcategory->save();

        $notification = "Blog Category creation successfull";

        return redirect()->route('blog_cat.index')->with('notification', $notification);
    }

    public function index()
    {
        $blogcategories = Category::paginate(40);

        return view('students.pages.blog-categories.view')->with('blogcategories', $blogcategories);
    }

    public function edit($id)
    {
        $blogcategories = Category::find($id);
        return view('students.pages.blog-categories.edit')->with('blogcategories', $blogcategories);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | string | max:200',
            'image' => 'required | image | mimes:jpg,png,jpeg,gif,svg|max:10000',
            'description' => 'required| string | max:1000'
        ]);

        $blogcategory = Category::find($request->id);
        $blogcategory->name = $request->name;
        $blogcategory->description = $request->description;
        
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $file = $request->image;
            $file_new_name = $request->title . time();
            $file->move('web/images/blog/', $file_new_name . "." . $extension);
            $blogcategory->image = 'web/images/blog/' . $file_new_name . "." . $extension;
        }
        $blogcategory->save();

        $notification = "Blog Category Updated successful";

        return redirect()->route('blog_cat.index')->with('notification', $notification);
    }

    public function delete($id){
        $blogcategory = Category::find($id);
        $blogcategory->delete();

        $notification = "Blog Category deleted successful";
        return redirect()->route('blog_cat.index')->with('notification', $notification);
    }
}
