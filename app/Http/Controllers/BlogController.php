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

    public function save(Request $request)
    {   
        // dd($request->all());
       
        // Validate the form input
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'position' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $data = new Blog();

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = $request->file('image');
            $imageName = time() . '.' . $request->image->extension(); // Unique image name
            $request->image->move(public_path('images/blog'), $imageName); // Store image in public/images/team
            $data->image = 'images/blog/' . $imageName; // Save the path in DB
        }

        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->save();

        // Redirect or return response
        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }
    
    public function edit($id){
        $data = Blog::find($id);
        return view('backend.blogs.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //  dd($request->all());

        $data = Blog::find($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = $request->file('image');
            $imageName = time() . '.' . $request->image->extension(); // Unique image name
            $request->image->move(public_path('images/blog'), $imageName); // Store image in public/images/team
            $data->image = 'images/blog/' . $imageName; // Save the path in DB
        }
        
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
