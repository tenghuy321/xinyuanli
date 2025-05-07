<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::get();
        return view('admin.videos.index', compact('videos'));
    }


    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request to ensure files are of the correct type and size (100MB limit)
        $request->validate([
            'videos_en' => 'nullable|file|mimes:mp4,avi,mkv|max:102400', // 100MB
            'videos_ch' => 'nullable|file|mimes:mp4,avi,mkv|max:102400', // 100MB
        ]);

        $data = [];

        if ($request->hasFile('videos_en')) {
            $data['videos']['en'] = $request->file('videos_en')->store('videos/en', 'custom');
        }

        if ($request->hasFile('videos_ch')) {
            $data['videos']['ch'] = $request->file('videos_ch')->store('videos/ch', 'custom');
        }

        $i = Video::create($data);

        return $i
            ? redirect()->route('profile-video.index')->with('success', 'Video has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Video.')->withInput();
    }

    public function edit(string $id)
    {
        $video = Video::findOrFail($id);
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, string $id)
    {
        // Validate the incoming request to ensure files are of the correct type and size (100MB limit)
        $request->validate([
            'videos_en' => 'nullable|file|mimes:mp4,avi,mkv|max:102400', // 100MB
            'videos_ch' => 'nullable|file|mimes:mp4,avi,mkv|max:102400', // 100MB
        ]);

        // Find the video by ID
        $video = Video::findOrFail($id);

        // Initialize data array
        $data = [];

        // Handle English video file upload
        if ($request->hasFile('videos_en')) {
            // Delete old file if it exists
            if (Storage::disk('custom')->exists($video->videos['en'])) {
                Storage::disk('custom')->delete($video->videos['en']);
            }
            // Store the new file
            $data['videos']['en'] = $request->file('videos_en')->store('videos/en', 'custom');
        }

        // Handle Chinese video file upload
        if ($request->hasFile('videos_ch')) {
            // Delete old file if it exists
            if (Storage::disk('custom')->exists($video->videos['ch'])) {
                Storage::disk('custom')->delete($video->videos['ch']);
            }
            // Store the new file
            $data['videos']['ch'] = $request->file('videos_ch')->store('videos/ch', 'custom');
        }

        // Update the video record
        $updated = $video->update($data);

        // Return a response based on the success of the update
        return $updated
            ? redirect()->route('profile-video.index')->with('success', 'Video has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Video.')->withInput();
    }
}
