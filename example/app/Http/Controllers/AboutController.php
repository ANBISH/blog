<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class AboutController extends Controller
{
    public function index(){
        return view('startbootstrap-clean-blog-gh-pages/about');
    }
}
