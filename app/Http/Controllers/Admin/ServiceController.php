<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.Services.List', compact('services'));
    }

    public function create()
    {
        return view('admin.Services.Add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'is_active' => 'boolean',
        ]);

        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $img_name);
        $img_url = 'images/'.$img_name;

        Service::create([
            'title' => $request->title,
            'image' => $img_url,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.Services.Edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'is_active' => 'boolean',
        ]);

        $previous_img_url = $service->image;

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $img_name);
            $img_url = 'images/'.$img_name;

            // Delete the previous image
            if ($previous_img_url && file_exists(public_path($previous_img_url))) {
                unlink(public_path($previous_img_url));
            }

            // Update the product with the new image
            $service->update(['image' => $img_url]);
            $service->refresh();
        }
        $service->update([
            'title' => $request->title,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function delete(Service $service)
    {
        // Delete the image file
        if ($service->image && file_exists(public_path("storage/{$service->image}"))) {
            unlink(public_path("storage/{$service->image}"));
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
