<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::all();
        return view('backend.team.index', compact('data'));
    }
    public function create()
    {
        return view('backend.team.create');
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

        $data = new Team();

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension(); // Unique image name
            $request->image->move(public_path('images/team'), $imageName); // Store image in public/images/team
            $data->image = 'images/team/' . $imageName; // Save the path in DB
        }

        // Assign validated data to the model
        $data->name = $validatedData['name'];
        $data->position = $validatedData['position'];
        $data->description = $validatedData['description'] ?? null;

        // Save the new team member
        $data->save();

        // Redirect or return response
        return redirect()->route('team.index')->with('success', 'Team member created successfully!');
    }


    public function edit($id)
    {
        // dd($id);

        $data = Team::find($id);
        // dd($data);
        return view('backend.team.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);

        $data = Team::find($id);
        $data->name = $request->name;
        $data->position = $request->position;
        $data->description = $request->description;
        $data->save();

        // Redirect or return response
        return redirect()->route('team.index')->with('success', 'Team member created successfully!');
    }
    public function delete($id)
    {
        // dd($id);
        $data = Team::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully!');
    }
}
