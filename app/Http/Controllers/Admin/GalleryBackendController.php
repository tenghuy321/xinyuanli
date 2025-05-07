<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryBackendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('order')->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create'); // Your Blade form
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'custom');
        }

        $data['order'] = Gallery::max('order') + 1;

        $i = Gallery::create($data); // Use create instead of insert

        return $i
            ? redirect()->route('galleryImage.index')->with('success', 'Gallery iamge has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Gallery iamge.')->withInput();
    }

    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', '_method', 'image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image && Storage::disk('custom')->exists($gallery->image)) {
                Storage::disk('custom')->delete($gallery->image);
            }

            // Store new one
            $data['image'] = $request->file('image')->store('gallery', 'custom');
        }

        $i = $gallery->update($data);

        return $i
            ? redirect()->route('galleryImage.index')->with('success', 'Gallery Image has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Gallery image.')->withInput();
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            Gallery::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }

    public function delete(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image && Storage::disk('custom')->exists($gallery->image)) {
            Storage::disk('custom')->delete($gallery->image);
        }

        $deleted = $gallery->delete();

        return $deleted
            ? redirect()->route('galleryImage.index')->with('success', 'Image deleted successfully!')
            : redirect()->back()->with('error', 'Failed to delete image.');
    }
}
