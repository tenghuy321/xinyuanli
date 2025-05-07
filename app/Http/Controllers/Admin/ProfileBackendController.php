<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileBackendController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profiles::get();
        return view('admin.profiles.index', compact('profiles'));
    }

    public function edit(string $id)
    {
        $profile = Profiles::findOrFail($id);
        return view('admin.profiles.edit', compact('profile'));
    }

    public function update(Request $request, string $id)
    {
        $profile = Profiles::findOrFail($id);

        // Prepare data for update
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

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($profile->image && Storage::disk('custom')->exists($profile->image)) {
                Storage::disk('custom')->delete($profile->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('profiles', 'custom');
        }

        if ($request->hasFile('icon')) {
            // Delete old icon if it exists
            if ($profile->icon && Storage::disk('custom')->exists($profile->icon)) {
                Storage::disk('custom')->delete($profile->icon);
            }

            // Store new icon
            $data['icon'] = $request->file('icon')->store('profiles', 'custom');
        }

        // Update profile
        $profile->update($data);

        return redirect()->route('profileAdmin.index')->with('success', 'Profile has been updated successfully.');
    }

    // public function delete(string $id)
    // {
    //     $i = Profiles::findOrFail($id);

    //     // Delete the image file if it exists
    //     if ($i->image && Storage::disk('custom')->exists($i->image)) {
    //         Storage::disk('custom')->delete($i->image);
    //     }

    //     $deleted = $i->delete();

    //     return $deleted
    //         ? redirect()->route('profileAdmin .index')->with('success', 'Image deleted successfully!')
    //         : redirect()->back()->with('error', 'Failed to delete image.');
    // }
}
