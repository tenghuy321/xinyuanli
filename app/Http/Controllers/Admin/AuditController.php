<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuditController extends Controller
{
    public function index()
    {
        $audites = Audit::get();
        return view('admin.audites.index', compact('audites'));
    }

    // public function create()
    // {
    //     return view('admin.audites.create'); // Your Blade form
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
    //         ]
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('audites', 'custom');
    //     }

    //     $i = Audit::create($data);

    //     return $i
    //         ? redirect()->route('audit.index')->with('success', 'Our Service has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create Our Service.')->withInput();
    // }

    public function edit(string $id)
    {
        $audit = Audit::findOrFail($id);
        return view('admin.audites.edit', compact('audit'));
    }

    public function update(Request $request, string $id)
    {
        $audit = Audit::findOrFail($id);

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
            // Delete old icon if it exists
            if ($audit->image && Storage::disk('custom')->exists($audit->image)) {
                Storage::disk('custom')->delete($audit->image);
            }

            // Store new icon
            $data['image'] = $request->file('image')->store('audites', 'custom');
        }

        $i = $audit->update($data);


        return $i
            ? redirect()->route('audit.index')->with('success', 'Audit has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Audit.')->withInput();
    }
}
