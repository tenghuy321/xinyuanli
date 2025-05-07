<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Csr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsrController extends Controller
{
    public function index()
    {
        $csrs = Csr::orderBy('order')->get();
        return view('admin.csr.index', compact('csrs'));
    }

    public function create()
    {
        return view('admin.csr.create'); // Your Blade form
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('csr_image', 'custom');
        }

        $data['order'] = Csr::max('order') + 1;

        $i = Csr::create($data); // Use create instead of insert

        return $i
            ? redirect()->route('csr.index')->with('success', 'Image has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create image.')->withInput();
    }

    public function edit(string $id)
    {
        $csr = Csr::findOrFail($id);
        return view('admin.csr.edit', compact('csr'));
    }

    public function update(Request $request, string $id)
    {
        $csr = Csr::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except('_token', '_method', 'image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($csr->image && Storage::disk('custom')->exists($csr->image)) {
                Storage::disk('custom')->delete($csr->image);
            }

            // Store new one
            $data['image'] = $request->file('image')->store('csr_image', 'custom');
        }

        $i = $csr->update($data);

        return $i
            ? redirect()->route('csr.index')->with('success', 'Image has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update image.')->withInput();
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            Csr::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }

    public function delete(string $id)
    {
        $csr = Csr::findOrFail($id);
        if ($csr->image && Storage::disk('custom')->exists($csr->image)) {
            Storage::disk('custom')->delete($csr->image);
        }

        $deleted = $csr->delete();

        return $deleted
            ? redirect()->route('csr.index')->with('success', 'Image deleted successfully!')
            : redirect()->back()->with('error', 'Failed to delete image.');
    }
}
