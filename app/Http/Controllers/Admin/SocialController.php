<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index(Request $request)
    {
        $socials = Social::get();
        return view('admin.social.index', compact('socials'));
    }

    public function edit(string $id)
    {
        $social = Social::findOrFail($id);
        return view('admin.social.edit', compact('social'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'telegram' => 'required|string|max:255',
            'facebook_name' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'working_hour' => 'required|string|max:255',
            'map' => 'required|string|max:500',
            'location' => 'required|string|max:255',
        ]);

        $social = Social::findOrFail($id);

        $social->update([
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'telegram' => $validated['telegram'],
            'facebook_name' => $validated['facebook_name'],
            'facebook' => $validated['facebook'],
            'website' => $validated['website'],
            'working_hour' => $validated['working_hour'],
            'map' => $validated['map'],
            'location' => $validated['location'],
        ]);

        return redirect()->route('social.index')->with('success', 'Social has been updated successfully.');
    }
}
