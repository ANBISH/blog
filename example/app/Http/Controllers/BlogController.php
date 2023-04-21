<?php

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::paginate(5);
        return view('blog', compact('blogs'));
    }
    public function index(){
        $blogs = Blog::all();
        return view('startbootstrap-clean-blog-gh-pages/index', compact('blogs'));
    }
    public function show(Blog $blogs){
        return view('startbootstrap-clean-blog-gh-pages/show', compact('blogs'));
    }
}
