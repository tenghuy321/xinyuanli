<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BusinessRegistrationController extends Controller
{
    public function index()
    {
        $business_registrations = BusinessRegistration::get();
        return view('admin.businessRegistration.index', compact('business_registrations'));
    }

    // public function create()
    // {
    //     return view('admin.businessRegistration.create'); // Your Blade form
    // }

    // public function store(Request $request)
    // {
    //     $data = [];

    //     if ($request->hasFile('images_en')) {
    //         $data['images']['en'] = $request->file('images_en')->store('business_registration', 'custom');
    //     }

    //     if ($request->hasFile('images_ch')) {
    //         $data['images']['ch'] = $request->file('images_ch')->store('business_registration', 'custom');
    //     }

    //     $i = BusinessRegistration::create($data);

    //     return $i
    //         ? redirect()->route('businessRegistration.index')->with('success', 'Business Registration has been created successfully!')
    //         : redirect()->back()->with('error', 'Failed to create Business Registration.')->withInput();
    // }

    public function edit(string $id)
    {
        $business_registration = BusinessRegistration::findOrFail($id);
        return view('admin.businessRegistration.edit', compact('business_registration'));
    }

    public function update(Request $request, string $id)
    {
        $business_registration = BusinessRegistration::findOrFail($id);

        $data['images'] = $business_registration->images;

        if ($request->hasFile('images.en')) {
            if (isset($business_registration->images['en']) && Storage::disk('custom')->exists($business_registration->images['en'])) {
                Storage::disk('custom')->delete($business_registration->images['en']);
            }
            $data['images']['en'] = $request->file('images.en')->store('business_registration', 'custom');
        }

        if ($request->hasFile('images.ch')) {
            if (isset($business_registration->images['ch']) && Storage::disk('custom')->exists($business_registration->images['ch'])) {
                Storage::disk('custom')->delete($business_registration->images['ch']);
            }
            $data['images']['ch'] = $request->file('images.ch')->store('business_registration', 'custom');
        }


        $data = array_merge($data,[
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
            'sub_title5' => [
                'en' => $request->input('sub_title5.en', ''),
                'ch' => $request->input('sub_title5.ch', ''),
            ],
            'sub_title6' => [
                'en' => $request->input('sub_title6.en', ''),
                'ch' => $request->input('sub_title6.ch', ''),
            ],
            'sub_title7' => [
                'en' => $request->input('sub_title7.en', ''),
                'ch' => $request->input('sub_title7.ch', ''),
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
            'content6' => [
                'en' => $request->input('content6.en', ''),
                'ch' => $request->input('content6.ch', ''),
            ],
            'content7' => [
                'en' => $request->input('content7.en', ''),
                'ch' => $request->input('content7.ch', ''),
            ],
            'content8' => [
                'en' => $request->input('content8.en', ''),
                'ch' => $request->input('content8.ch', ''),
            ],
            'content9' => [
                'en' => $request->input('content9.en', ''),
                'ch' => $request->input('content9.ch', ''),
            ],
            'content10' => [
                'en' => $request->input('content10.en', ''),
                'ch' => $request->input('content10.ch', ''),
            ],
            'content11' => [
                'en' => $request->input('content11.en', ''),
                'ch' => $request->input('content11.ch', ''),
            ],
            'content12' => [
                'en' => $request->input('content12.en', ''),
                'ch' => $request->input('content12.ch', ''),
            ],
            'content13' => [
                'en' => $request->input('content13.en', ''),
                'ch' => $request->input('content13.ch', ''),
            ],
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($business_registration->image && Storage::disk('custom')->exists($business_registration->image)) {
                Storage::disk('custom')->delete($business_registration->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('business_registration', 'custom');
        }

        $i = $business_registration->update($data);


        return $i
            ? redirect()->route('businessRegistration.index')->with('success', 'Business Registration has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Business Registration.')->withInput();
    }
}
