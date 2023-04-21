<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class MainController extends Controller
{
    public function index(){
        return view('startbootstrap-clean-blog-gh-pages/layouts/main');
    }
}
