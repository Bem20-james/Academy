<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin\Blog;
use App\Models\admin\Category;
use App\Models\admin\Review;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        return view('index2');
    }

    public function about()
    {
        return view('web.pages.about_us');
    }
// HEAD
    public function contact()
    {
        return view('web.pages.contact');
    }
    public function blog()
    {
        $posts = Blog::take(6)->get();
        $blogcategory = Category::take(5)->get();
        return view('web.pages.Blog.index')->with('posts', $posts)->with('blogcategories', $blogcategory);
    }

    public function blogcatposts($blogcat, $id)
    {
        $blogcategory = Category::take(5)->get();
        $posts = Blog::where('blogcategory', $blogcat)->paginate(10);
        return view('web.posts.blogcat_post')->with('blogcategories', $blogcategory)->with('posts', $posts);
    }

    public function posts($title, $blogcategory, $id)
    {

        // $blogcategories = DB::table('blog_cat')->where('name', $blogcategory)->select('name', 'image', 'description')->first();
        $categories = Category::where('name', $blogcategory)->select('name', 'image', 'description')->get();

        $post = Blog::find($id);
        $reviews = Review::where('blog_id', $id)->take(3)->get();

        return view('web.posts.post')->with('categories', $categories)->with('reviews', $reviews)->with('post', $post);
    }

    // REVIEWS
    public function store(Request $request)
    {
        $this->validate($request, [
            'blog_id' => 'required | integer | max:50',
            'full_name' => 'required | string | max:50',
            'review_img' => 'required | mimes:jpg,png,jpeg,gif,svg|max:10000',
            'email' => 'required | email | max:150',
            'content' => 'required | string | max:150'
        ]);

        $reviews = new Review;
        $reviews->blog_id = $request->blog_id;
        $reviews->full_name = $request->full_name;
        $reviews->email = $request->email;
        $reviews->content = $request->content;

        if ($request->hasFile('review_img')) {
            $extension = $request->review_img->extension();
            $file = $request->review_img;
            $file_new_name = $request->title . time();
            $file->move('web/images/blog/', $file_new_name . "." . $extension);
            $reviews->review_img = 'web/images/blog/' . $file_new_name . "." . $extension;

        }
        $reviews->save();

        return redirect()->back();
    }

    public function courses(){
        return view('web.pages.courses');
    }
}
