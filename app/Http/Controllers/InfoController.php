<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function location_index()
    {
        $data = Info::where('type', 'location')->get();
        return view('backend.location.index', compact('data'));
    }

    public function location_create()
    {
        return view('backend.location.create');
    }
    public function location_save(Request $request)
    {
        // Validate the request data
        $request->validate([
            // 'status'
            'state_name' => 'required',
            'district_name' => 'required|string|max:1000',
            'address' => 'required|string|max:5000',
        ]);

        // Prepare the info array
        $info = [
            'state_name' => ucwords($request->state_name),
            'name' => ucwords($request->district_name),
            'address' => ucwords($request->address),
        ];


        // Create a new Info instance
        $data = new Info();
        $data->type = 'location';
        $data->info = json_encode($info); // Use json_encode to save info as JSON string
        $data->save();

        return redirect()->route('location.index')->with('success', 'Location saved successfully!');
    }
    public function location_edit($id)
    {
        $location = Info::findOrFail($id);

        // Decode the info field if it contains JSON
        $location->info = json_decode($location->info, true);

        return view('backend.location.edit', compact('location'));
    }

    public function location_update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'state_name' => 'required',
            'district_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Find the location by ID
        $location = Info::findOrFail($id);
        $info = [
            'state_name' => ucwords($request->state_name),
            'name' => ucwords($request->district_name),
            'address' => ucwords($request->address),
        ];

        // Update the info field
        $location->info = json_encode($info);

        $location->save();

        return redirect()->route('location.index')->with('success', 'Location updated successfully!');
    }
    public function location_delete($id)
    {
        // Find the location by ID
        $location = Info::findOrFail($id);

        // Delete the location
        $location->delete();

        return redirect()->route('location.index')->with('success', 'Location deleted successfully!');
    }


    // media 
    public function media_index()
    {
        $data = Info::where('type', 'media')->get();
        return view('backend.media.index', compact('data'));
    }
    public function media_create()
    {
        return view('backend.media.create');
    }
    public function media_save(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Prepare the info array
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/media'), $imageName);

        $info = [
            'image' => $imageName,
        ];

        // Create a new Info instance
        $data = new Info();
        $data->type = 'media';
        $data->info = json_encode($info); // Use json_encode to save info as JSON string
        $data->save();
        return redirect()->route('media.index')->with('success', 'Media create successfully!');
    }
    public function media_edit($id)
    {
        $media = Info::findOrFail($id);

        // Decode the info field if it contains JSON
        // Get the existing info from the database
        $info = json_decode($media->info, true); // Decode to an array if not already


        return view('backend.media.edit', compact('media', 'info'));
    }
    public function media_update(Request $request, $id)
    {
        // Find the existing media record
        $media = Info::findOrFail($id);

        // Validate the request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Image validation
        ]);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image from the public folder 
            $oldImage = json_decode($media->info, true)['image'] ?? null;
            if ($oldImage && file_exists(public_path('images/media/' . $oldImage))) {
                unlink(public_path('images/media/' . $oldImage));
            }

            // Prepare the new image file name
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/media'), $imageName);

            // Update the info array with the new image
            $info = [
                'image' => $imageName,
            ];
        } else {
            // If no new image was uploaded, keep the existing image
            $info = json_decode($media->info, true); // Decode the existing info
        }

        // Update the media record
        $media->info = json_encode($info); // Encode info to JSON string
        $media->save(); // Save the updated record

        return redirect()->route('media.index')->with('success', 'Media updated successfully!');
    }


    public function media_delete($id)
    {
        // Find the media by ID
        $media = Info::findOrFail($id);

        // Retrieve the image name from the info field
        $info = json_decode($media->info, true);
        $imageName = $info['image'] ?? null;

        // Delete the image from the server if it exists
        if ($imageName && file_exists(public_path('images/media/' . $imageName))) {
            unlink(public_path('images/media/' . $imageName));
        }

        // Delete the media record
        $media->delete();

        return redirect()->route('media.index')->with('success', 'Media deleted successfully!');
    }

    // Important Information
    public function important_information_index()
    {
        $data = Info::where('type', 'importants')->get();
        return view('backend.important.index', compact('data'));
    }
    public function important_information_create()
    {
        return view('backend.important.create');
    }
    public function important_information_save(Request $request)
    {
        // Validate the request data title and importants file 

        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        // Store the uploaded PDF
        $pdfName = time() . '.' . $request->pdf->getClientOriginalExtension();
        $request->pdf->move(public_path('images/important_pdfs'), $pdfName);

        // Prepare the info array
        $info = [
            'title' => $request->title,
            'pdf' => $pdfName,
        ];

        // Create a new Info instance
        $data = new Info();
        $data->type = 'importants';
        $data->info = json_encode($info); // Save info as JSON string
        $data->save();

        return redirect()->route('important-information.index')->with('success', 'Media created successfully!');
    }
    public function important_information_edit($id)
    {
        // Find the record by ID
        $data = Info::findOrFail($id);

        // Decode the info JSON
        $info = json_decode($data->info, true);

        return view('backend.important.edit', compact('data', 'info'));
    }

    public function important_information_update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:2048', // PDF is optional
        ]);

        // Find the record by ID
        $data = Info::findOrFail($id);

        // Decode existing info
        $info = json_decode($data->info, true);

        // Update the title
        $info['title'] = $request->title;

        // Check if a new PDF is uploaded
        if ($request->hasFile('pdf')) {
            // Delete the old PDF
            if (isset($info['pdf']) && file_exists(public_path('images/important_pdfs/' . $info['pdf']))) {
                unlink(public_path('images/important_pdfs/' . $info['pdf']));
            }

            // Store the new PDF
            $pdfName = time() . '.' . $request->pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('images/important_pdfs'), $pdfName);
            $info['pdf'] = $pdfName;
        }

        // Update the info field
        $data->info = json_encode($info);
        $data->save();

        return redirect()->route('important-information.index')->with('success', 'Information updated successfully!');
    }

    public function important_information_delete($id)
    {
        // Find the record by ID
        $data = Info::findOrFail($id);

        // Decode existing info
        $info = json_decode($data->info, true);

        // Delete the PDF file
        if (isset($info['pdf']) && file_exists(public_path('images/important_pdfs/' . $info['pdf']))) {
            unlink(public_path('images/important_pdfs/' . $info['pdf']));
        }

        // Delete the record
        $data->delete();

        return redirect()->route('important-information.index')->with('success', 'Information deleted successfully!');
    }
}
