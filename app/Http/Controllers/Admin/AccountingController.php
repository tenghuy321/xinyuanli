<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accounting;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Storage;

class AccountingController extends Controller
{
    public function index()
    {
        $accounts = Accounting::get();
        return view('admin.accounting.index', compact('accounts'));
    }

    // public function create()
    // {
    //     return view('admin.accounting.create');
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
    //         ]
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('accounts', 'custom');
    //     }

    //     $i = Accounting::create($data);

    //     return $i
    //         ? redirect()->route('accounting.index')->with('success', 'accounting has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create accounting.')->withInput();
    // }

    public function edit(string $id)
    {
        $accounting = Accounting::findOrFail($id);
        return view('admin.accounting.edit', compact('accounting'));
    }

    public function update(Request $request, string $id)
    {
        $accounting = Accounting::findOrFail($id);

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
            ]
        ];


        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($accounting->image && Storage::disk('custom')->exists($accounting->image)) {
                Storage::disk('custom')->delete($accounting->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('accounting', 'custom');
        }

        $i = $accounting->update($data);


        return $i
            ? redirect()->route('regulatories-advisory.index')->with('success', 'Accounting has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Accounting.')->withInput();
    }
}
