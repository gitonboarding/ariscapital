<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $data = Board::all();
        return view('backend.board.index', compact('data'));
    }

    public function create()
    {
        return view('backend.board.create');
    }

    public function save(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Board();

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension(); // Unique image name
            $request->image->move(public_path('images/board'), $imageName); // Store image in public/images/team
            $data->image = 'images/board/' . $imageName; // Save the path in DB
        }

        $data->name = $request->name;
        $data->position = $request->position;
        $data->description = $request->description ?? null;

        // Save the new team member
        $data->save();

        // Redirect or return response
        return redirect()->route('board.index')->with('success', 'Board member created successfully!');
    }


    public function edit($id)
    {
        $data = Board::find($id);
        // dd($data->id);
        return view('backend.board.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Board::find($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension(); // Unique image name
            $request->image->move(public_path('images/board'), $imageName); // Store image in public/images/team
            $data->image = 'images/board/' . $imageName; // Save the path in DB
        }
        $data->name = $request->name;
        $data->position = $request->position;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('board.index');
    }


    public function delete($id)
    {
        $data = Board::find($id);
        $data->delete();
        return redirect()->route('board.index');
    }

    public function duplicate($id)
    {
        $data = Board::find($id);

        if ($data) {
            // Create a new entry with the same attributes, except for the ID.
            $newData = $data->replicate();
            $newData->save();
            return redirect()->route('board.index')->with('success', 'Board member duplicated successfully.');
        }

        return redirect()->route('board.index')->with('error', 'Board member not found.');
    }
}
