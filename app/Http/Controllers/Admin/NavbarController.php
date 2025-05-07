<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index(Request $request)
    {
        $navs = Navbar::orderBy('order')->get();
        return view('admin.navbar.index', compact('navs'));
    }

    public function create()
    {
        return view('admin.navbar.create');
    }

    public function store(Request $request)
    {
        // Navbar::create([
        //     'title' => [
        //         'en' => $request->input('title.en', ''),
        //         'ch' => $request->input('title.ch', ''),
        //     ],
        // ]);

        $data = $request->except('_token', 'image');

        $data['order'] = Navbar::max('order') + 1;

        $i = Navbar::create($data);

        return $i
            ? redirect()->route('navbar.index')->with('success', 'Navbar has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Navbar.')->withInput();
    }

    public function edit(string $id)
    {
        $nav = Navbar::findOrFail($id);
        return view('admin.navbar.edit', compact('nav'));
    }

    public function update(Request $request, string $id)
    {

        $nav = Navbar::findOrFail($id);

        $data = [
            'title' => [
                'en' => $request->input('title.en', ''),
                'ch' => $request->input('title.ch', ''),
            ]
        ];


        $i = $nav->update($data);


        return $i
            ? redirect()->route('navbar.index')->with('success', 'Navbar has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Navbar.')->withInput();
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            Navbar::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }
}
