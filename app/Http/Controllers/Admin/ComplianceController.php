<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComplianceController extends Controller
{
    public function index()
    {
        $compliances = Compliance::get();
        return view('admin.compliances.index', compact('compliances'));
    }

    // public function create()
    // {
    //     return view('admin.compliances.create'); // Your Blade form
    // }

    // public function store(Request $request)
    // {
    //     $data = [
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
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('compliances', 'custom');
    //     }

    //     $i = Compliance::create($data);

    //     return $i
    //         ? redirect()->route('tax-compliances.index')->with('success', 'Tax Compliances has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create Tax Compliances.')->withInput();
    // }

    public function edit(string $id)
    {
        $compliance = Compliance::findOrFail($id);
        return view('admin.compliances.edit', compact('compliance'));
    }

    public function update(Request $request, string $id)
    {
        $compliance = Compliance::findOrFail($id);

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
            ]
        ];

        if ($request->hasFile('image')) {
            // Delete old icon if it exists
            if ($compliance->image && Storage::disk( 'custom')->exists($compliance->image)) {
                Storage::disk('custom')->delete($compliance->image);
            }

            // Store new icon
            $data['image'] = $request->file('image')->store('compliances', 'custom');
        }

        $i = $compliance->update($data);


        return $i
            ? redirect()->route('tax-compliances.index')->with('success', 'Tax Compliances has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Tax Compliances.')->withInput();
    }
}
