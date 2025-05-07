<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Licensing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LicensingController extends Controller
{
    public function index()
    {
        $licensinges = Licensing::get();
        return view('admin.licensing.index', compact('licensinges'));
    }

    // public function create()
    // {
    //     return view('admin.licensing.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = [
    //         'title' => [
    //             'en' => $request->input('title.en', ''),
    //             'ch' => $request->input('title.ch', ''),
    //         ],
    //         'content' => [
    //             'en' => $request->input('content.en', ''),
    //             'ch' => $request->input('content.ch', ''),
    //         ],
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('licensinges', 'custom');
    //     }

    //     $i = Licensing::create($data);

    //     return $i
    //         ? redirect()->route('licensing.index')->with('success', 'Licensing has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create Licensing.')->withInput();
    // }

    public function edit(string $id)
    {
        $licensing = Licensing::findOrFail($id);
        return view('admin.licensing.edit', compact('licensing'));
    }

    public function update(Request $request, string $id)
    {
        $licensing = Licensing::findOrFail($id);


        $data = [
            'title' => [
                'en' => $request->input('title.en', ''),
                'ch' => $request->input('title.ch', ''),
            ],
            'content' => [
                'en' => $request->input('content.en', ''),
                'ch' => $request->input('content.ch', ''),
            ],
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($licensing->image && Storage::disk('custom')->exists($licensing->image)) {
                Storage::disk('custom')->delete($licensing->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('licensinges', 'custom');
        }

        $i = $licensing->update($data);


        return $i
            ? redirect()->route('licensing.index')->with('success', 'Licensing has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Licensing.')->withInput();
    }
}
