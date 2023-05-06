<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Blog;
use App\Models\admin\Category;

class BlogsController extends Controller
{
    public function view(Request $request)
    {
        // $blogs = Blog::take(20)->get();
        $blog = Blog::paginate(10);

        return view('students.pages.blogs.view')->with('blog', $blog);
    }
    public function create()
    {
        $blogcategories = Category::all();
        return view('students.pages.blogs.create')->with('blogcategories', $blogcategories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'blogcategory' => 'required | string | max:100',
            'title' => 'required | string | max:150',
            'description' => 'required | string | max:2000',
            'image' => 'required | image | mimes:jpg,png,jpeg,gif,svg|max:10000',
        ]);

        $blog = new Blog;
        $blog->blogcategory = $request->blogcategory;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $file = $request->image;
            $file_new_name = $request->title . time();
            $file->move('web/images/blog/', $file_new_name . "." . $extension);
            $blog->image = 'web/images/blog/' . $file_new_name . "." . $extension;
        }
        $blog->save();
        $notification = "Post upload successful";

        return redirect()->route('view.blogs')->with('notification', $notification);

    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blogcategories = Category::all();
        return view('students.pages.blogs.edit')->with('blog', $blog)->with('blogcategories', $blogcategories);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'blogcategory' => 'required | string | max:100',
            'title' => 'required | string | max:150',
            'description' => 'required | string | max:2000',
            'image' => 'required | image | mimes:jpg,png,jpeg,gif,svg|max:10000',
        ]);

        $blog = Blog::find($request->id);
        $blog->blogcategory = $request->blogcategory;
        $blog->title = $request->title;
        $blog->description = $request->description;



        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $file = $request->image;
            $file_new_name = $request->title . time();
            $file->move('web/images/blog/', $file_new_name . "." . $extension);
            $blog->image = 'web/images/blog/' . $file_new_name . "." . $extension;


            // Delete the old file
            if (file_exists($blog->image)) {
                unlink($blog->image);
            }
        }
        $blog->save();
        $notification = "Post updated successfully";

        return redirect()->route('view.blogs')->with('notification', $notification);
    }


    public function delete($id, $type)
    {
        $blog = Blog::find($id);

        if($type == "trash"){
            $blog->delete();
            $notification = "Post Trashed successful";
        }elseif($type == "delete"){
            $blog->forceDelete();
            $notification = "Post deleted successful";
        }

        return redirect()->route('view.blogs')->with('notification', $notification);
    }

    public function trash()
    {
        $blog = Blog::onlyTrashed()->latest();
        $blog = $blog->paginate(5);

        return view('students.pages.blogs.trash')->with('blog', $blog);
    }

    public function restorePost($id)
    {
        $blog = Blog::onlyTrashed()->where('id', $id)->restore();
        $notification = "Post restored successfully";

        return redirect()->route('view.blogs')->with('blog', $blog)->with('notification', $notification);
    }
}
