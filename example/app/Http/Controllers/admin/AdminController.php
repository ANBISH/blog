<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{

    public function index(){
        $blogs = Blog::all();
        return view('admin/index', compact('blogs'));
    }
    public function create(){
        $blogs = Blog::all();
        return view('admin/create', compact('blogs'));
    }
    public function storer(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $blogs = new Blog();
        $blogs->title = $request->get('title');
        $blogs->category = $request->get('category');
        $blogs->tag = $request->get('tag');
        $blogs->description = $request->get('description');
        $blogs->image = $request->file('image')->store('uploads','public');
        $blogs->save();
        return redirect('admin/create');
    }

    public function edit(Blog $blogs){
        return view('admin/update', compact('blogs'));
    }

    public function update(Blog $blogs){
        $data = request()->validate([
            'title' => 'string',
            'category' => 'string',
            'tag' => 'string',
            'description' => 'string',
            'image' => 'required|image',
        ]);

        DB::table('blogs')
            ->where('id', $blogs->id)
            ->update(['title' => request()->get('title'),
                'category' => request()->get('category'),
                'tag' => request()->get('tag'),
                'description' => request()->get('description'),
                'image' => request()->file('image')->store('uploads','public')
            ]);
        return redirect()->route('index.index');
    }

    public function destroy(Blog $blogs){
        $blogs->delete();
        Storage::disk('public')->delete($blogs->image);
        return redirect()->route('index.index');
    }
}
