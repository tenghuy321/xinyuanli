<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regulatory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegulatoryController extends Controller
{
    public function index()
    {
        $regulatories = Regulatory::get();
        return view('admin.regulatories.index', compact('regulatories'));
    }

    // public function create()
    // {
    //     return view('admin.regulatories.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = [
    //         'title' => [
    //             'en' => $request->input('title.en', ''),
    //             'ch' => $request->input('title.ch', ''),
    //         ],
    //         'sub_title1' => [
    //             'en' => $request->input('sub_title1.en', ''),
    //             'ch' => $request->input('sub_title1.ch', ''),
    //         ],
    //         'sub_title2' => [
    //             'en' => $request->input('sub_title2.en', ''),
    //             'ch' => $request->input('sub_title2.ch', ''),
    //         ],
    //         'sub_title3' => [
    //             'en' => $request->input('sub_title3.en', ''),
    //             'ch' => $request->input('sub_title3.ch', ''),
    //         ],
    //         'sub_title4' => [
    //             'en' => $request->input('sub_title4.en', ''),
    //             'ch' => $request->input('sub_title4.ch', ''),
    //         ],
    //         'content1' => [
    //             'en' => $request->input('content1.en', ''),
    //             'ch' => $request->input('content1.ch', ''),
    //         ],
    //         'content2' => [
    //             'en' => $request->input('content2.en', ''),
    //             'ch' => $request->input('content2.ch', ''),
    //         ],
    //         'content3' => [
    //             'en' => $request->input('content3.en', ''),
    //             'ch' => $request->input('content3.ch', ''),
    //         ],
    //         'content4' => [
    //             'en' => $request->input('content4.en', ''),
    //             'ch' => $request->input('content4.ch', ''),
    //         ],
    //         'content5' => [
    //             'en' => $request->input('content5.en', ''),
    //             'ch' => $request->input('content5.ch', ''),
    //         ],
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('regulatories', 'custom');
    //     }

    //     $i = Regulatory::create($data);

    //     return $i
    //         ? redirect()->route('regulatories-advisory.index')->with('success', 'regulatories has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create regulatories.')->withInput();
    // }

    public function edit(string $id)
    {
        $regulatory = Regulatory::findOrFail($id);
        return view('admin.regulatories.edit', compact('regulatory'));
    }

    public function update(Request $request, string $id)
    {
        $regulatory = Regulatory::findOrFail($id);

        $data = [
            'title' => [
                'en' => $request->input('title.en', ''),
                'ch' => $request->input('title.ch', ''),
            ],
            'sub_title1' => [
                'en' => $request->input('sub_title1.en', ''),
                'ch' => $request->input('sub_title1.ch', ''),
            ],
            'sub_title2' => [
                'en' => $request->input('sub_title2.en', ''),
                'ch' => $request->input('sub_title2.ch', ''),
            ],
            'sub_title3' => [
                'en' => $request->input('sub_title3.en', ''),
                'ch' => $request->input('sub_title3.ch', ''),
            ],
            'sub_title4' => [
                'en' => $request->input('sub_title4.en', ''),
                'ch' => $request->input('sub_title4.ch', ''),
            ],
            'content1' => [
                'en' => $request->input('content1.en', ''),
                'ch' => $request->input('content1.ch', ''),
            ],
            'content2' => [
                'en' => $request->input('content2.en', ''),
                'ch' => $request->input('content2.ch', ''),
            ],
            'content3' => [
                'en' => $request->input('content3.en', ''),
                'ch' => $request->input('content3.ch', ''),
            ],
            'content4' => [
                'en' => $request->input('content4.en', ''),
                'ch' => $request->input('content4.ch', ''),
            ],
            'content5' => [
                'en' => $request->input('content5.en', ''),
                'ch' => $request->input('content5.ch', ''),
            ],
        ];


        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($regulatory->image && Storage::disk('custom')->exists($regulatory->image)) {
                Storage::disk('custom')->delete($regulatory->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('regulatories', 'custom');
        }

        $i = $regulatory->update($data);


        return $i
            ? redirect()->route('regulatories-advisory.index')->with('success', 'Regulatory has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Regulatory.')->withInput();
    }
}
