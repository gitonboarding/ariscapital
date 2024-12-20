<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Info, Board, Team};
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function Home()
    {
        // $locations = Info::where('type', 'location')->get();

        $locations = DB::table('infos')
            ->where('type', 'location') // Filter for 'location' type
            ->get()
            ->map(function ($item) {
                $info = json_decode($item->info, true); // Decode JSON info
                $item->state_name = $info['state_name'] ?? 'Unknown'; // Extract state_name
                $item->name = $info['name'] ?? 'Unnamed';
                $item->address = $info['address'] ?? 'No Address';
                return $item;
            });

        // Group locations by state_name
        $groupedLocations = $locations->groupBy('state_name');
        // dd($locations);
        // $
        $importants_data = Info::where('type', 'importants')
            ->orderBy('id', 'DESC')
            ->take(8) // Added space between `orderBy()` and `take()`
            ->get();
        // dd($importants_data);
        $media_data = Info::where('type', 'media')
            ->orderBy('id', 'DESC')
            ->take(8) // Added space between `orderBy()` and `take()`
            ->get();

        // dd($media_data);

        return view('frontend.index', compact('locations', 'groupedLocations', 'importants_data', 'media_data'));
    }

    public function team()
    {
        $data = Team::all();
        // dd($data);


        return view('frontend.team', compact('data'));
    }

    public function board()
    {
        $data = Board::all();
        // dd($data);
        return view('frontend.board', compact('data'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function important_information()
    {
        $importants_data = Info::where('type', 'importants')
            ->orderBy('id', 'DESC')
            // ->take(8) // Added space between `orderBy()` and `take()`
            ->get();
        return view('frontend.important-information', compact('importants_data'));
    }
    public function media()
    {
        $media_data = Info::where('type', 'media')
            ->orderBy('id', 'DESC')
            ->take(8) // Added space between `orderBy()` and `take()`
            ->get();
        return view('frontend.media', compact('media_data'));
    }

    public function contact_us(Request $request)
    {
        $validated = $request->validate([
            'contact-name' => 'required|string|max:255',
            'contact-phone' => 'required|string|max:15',
            'contact-email' => 'required|email',
            'subject' => 'required|string|max:255',
            'contact-message' => 'required|string',
        ]);

        // save this information in infoa modal 
        $info = new Info();
        $info->type = 'contact';
        $info->info = json_encode($validated);
        $info->save();

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
