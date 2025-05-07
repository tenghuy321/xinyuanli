<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterBannerController extends Controller
{
    public function index()
    {
        $footer_banners = FooterBanner::get();
        return view('admin.footer_banner.index', compact('footer_banners'));
    }

    // public function create()
    // {
    //     return view('admin.footer_banner.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = [
    //         'title' => [
    //             'en' => $request->input('title.en', ''),
    //             'ch' => $request->input('title.ch', ''),
    //         ],
    //     ];

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('footer_banner', 'custom');
    //     }

    //     $i = FooterBanner::create($data);

    //     return $i
    //         ? redirect()->route('footer-banner.index')->with('success', 'Footer Banner has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create Footer Banner.')->withInput();
    // }

    public function edit(string $id)
    {
        $footer_banner = FooterBanner::findOrFail($id);
        return view('admin.footer_banner.edit', compact('footer_banner'));
    }

    public function update(Request $request, string $id)
    {
        $footer_banner = FooterBanner::findOrFail($id);

        $data = [
            'title' => [
                'en' => $request->input('title.en', ''),
                'ch' => $request->input('title.ch', ''),
            ]
        ];


        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($footer_banner->image && Storage::disk('custom')->exists($footer_banner->image)) {
                Storage::disk('custom')->delete($footer_banner->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('footer_banner', 'custom');
        }

        $i = $footer_banner->update($data);


        return $i
            ? redirect()->route('footer-banner.index')->with('success', 'Footer Banner has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Footer Banner.')->withInput();
    }
}
