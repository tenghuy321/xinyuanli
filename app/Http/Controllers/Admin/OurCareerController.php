<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurCareer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurCareerController extends Controller
{
    public function index()
    {
        $our_careers = OurCareer::get();
        return view('admin.career.index', compact('our_careers'));
    }

    public function create()
    {
        return view('admin.career.create'); // Your Blade form
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('our_career', 'custom');
        }

        $i = OurCareer::create($data); // Use create instead of insert

        return $i
            ? redirect()->route('ourCareer.index')->with('success', 'Career Image has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Career Image.')->withInput();
    }

    public function edit(string $id)
    {
        $our_career = OurCareer::findOrFail($id);
        return view('admin.career.edit', compact('our_career'));
    }

    public function update(Request $request, string $id)
    {
        $our_career = OurCareer::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', '_method', 'image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($our_career->image && Storage::disk('custom')->exists($our_career->image)) {
                Storage::disk('custom')->delete($our_career->image);
            }

            // Store new one
            $data['image'] = $request->file('image')->store('our_career', 'custom');
        }

        $i = $our_career->update($data);

        return $i
            ? redirect()->route('ourCareer.index')->with('success', 'Career Image has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Career image.')->withInput();
    }

    public function delete(string $id)
    {
        $our_career = OurCareer::findOrFail($id);
        if ($our_career->image && Storage::disk('custom')->exists($our_career->image)) {
            Storage::disk('custom')->delete($our_career->image);
        }

        $deleted = $our_career->delete();

        return $deleted
            ? redirect()->route('ourCareer.index')->with('success', 'Career Image deleted successfully!')
            : redirect()->back()->with('error', 'Failed to delete Career image.');
    }
}
