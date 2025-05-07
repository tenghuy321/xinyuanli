<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurServiceController extends Controller
{
    public function index()
    {
        $our_services = OurService::get();
        return view('admin.our_services.index', compact('our_services'));
    }

    public function create()
    {
        return view('admin.our_services.create'); // Your Blade form
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = [
            'title' => [
                'en' => $validated['title']['en'],
                'ch' => $validated['title']['ch'],
            ],
        ];

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('our_services', 'custom');
        }

        $i = OurService::create($data);

        return $i
            ? redirect()->route('ourService.index')->with('success', 'Our Service has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Our Service.')->withInput();
    }

    public function edit(string $id)
    {
        $our_service = OurService::findOrFail($id);
        return view('admin.our_services.edit', compact('our_service'));
    }

    public function update(Request $request, string $id)
    {
        $our_service = OurService::findOrFail($id);

        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
        ]);

        $our_service = OurService::findOrFail($id);

        $data = [
            'title' => [
                'en' => $validated['title']['en'],
                'ch' => $validated['title']['ch'],
            ],
        ];

        if ($request->hasFile('icon')) {
            // Delete old icon if it exists
            if ($our_service->icon && Storage::disk('custom')->exists($our_service->icon)) {
                Storage::disk('custom')->delete($our_service->icon);
            }

            // Store new icon
            $data['icon'] = $request->file('icon')->store('our_services', 'custom');
        }

        $i = $our_service->update($data);


        return $i
            ? redirect()->route('ourService.index')->with('success', 'our service has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update our service.')->withInput();
    }
}
