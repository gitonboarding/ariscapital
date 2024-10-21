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
        // dd($request->all());

        $data = new Board();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->description = $request->description;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('board.index');
    }


    public function edit($id) {
        $data = Board::find($id);
        // dd($data->id);
        return view('backend.board.edit', compact('data'));
    }

    public function delete($id) {
        $data = Board::find($id);
        $data->delete();
        return redirect()->route('board.index');
    }
}
