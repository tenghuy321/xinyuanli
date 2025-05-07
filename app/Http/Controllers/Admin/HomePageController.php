<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $homes = HomePage::orderBy('id')->get();
        return view('admin.homepage.index', compact('homes'));
    }

    // public function create()
    // {
    //     return view('admin.homepage.create');
    // }

    // public function store(Request $request)
    // {
    //     HomePage::create([
    //         'title' => [
    //             'en' => $request->input('title.en', ''),
    //             'ch' => $request->input('title.ch', ''),
    //         ],
    //         'sub_title' => [
    //             'en' => $request->input('sub_title.en', ''),
    //             'ch' => $request->input('sub_title.ch', ''),
    //         ],
    //         'content' => [
    //             'en' => $request->input('content.en', ''),
    //             'ch' => $request->input('content.ch', ''),
    //         ],
    //     ]);

    //     return redirect()->route('homepage.index')->with('success', 'Homepage content saved successfully.');
    // }

    public function edit(string $id)
    {
        $home = HomePage::findOrFail($id);
        return view('admin.homepage.edit', compact('home'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $home = HomePage::findOrFail($id);

        $data = [
            'title' => [
                'en' => $request->input('title.en', ''),
                'ch' => $request->input('title.ch', ''),
            ],
            'sub_title' => [
                'en' => $request->input('sub_title.en', ''),
                'ch' => $request->input('sub_title.ch', ''),
            ],
            'content' => [
                'en' => $request->input('content.en', ''),
                'ch' => $request->input('content.ch', ''),
            ],

            'active' => $request->has('active') ? 1 : 0,
        ];

        if ($request->hasFile('icon')) {
            // Delete old image
            if ($home->icon && Storage::disk('custom')->exists($home->icon)) {
                Storage::disk('custom')->delete($home->icon);
            }

            // Store new one
            $data['icon'] = $request->file('icon')->store('homes', 'custom');
        }

        $i = $home->update($data);

        return $i
            ? redirect()->route('homepage.index')->with('success', 'Homepage has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Homepage.')->withInput();
    }

    // public function delete(string $id)
    // {
    //     $home = HomePage::findOrFail($id);
    //     $i = HomePage::where('id', $id)->delete();


    //     if ($i) {
    //         return redirect()->route('homepage.index');
    //     } else {
    //         return redirect()->back();
    //     }
    // }
}
