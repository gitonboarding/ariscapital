<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        $data = Blog::all();
        return view('backend.blogs.index', compact('data'));
    }

    public function create() {
        return view('backend.blogs.create');
    }

    public function save(Request $request) {
        $data = new Blog();
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->save();
        return redirect()->route('blog.index');
    }
    
    public function edit($id){
        $data = Blog::find($id);
        return view('backend.blogs.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);

        $data = Blog::find($id);
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->save();
        return redirect()->route('blog.index');
    }

    public function delete($id) {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('blog.index');
    }

}
