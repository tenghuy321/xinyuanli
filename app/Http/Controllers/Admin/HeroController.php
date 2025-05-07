<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::orderBy('order')->get();
        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        $data = [];

        if ($request->hasFile('images_en')) {
            $data['images']['en'] = $request->file('images_en')->store('heroes', 'custom');
        }

        if ($request->hasFile('images_ch')) {
            $data['images']['ch'] = $request->file('images_ch')->store('heroes', 'custom');
        }

        $data['order'] = Hero::max('order') + 1;

        $i = Hero::create($data);

        return $i
            ? redirect()->route('hero.index')->with('success', 'Hero Banner has been created successfully!')
            : redirect()->back()->with('error', 'Failed to create Hero Banner.')->withInput();
    }

    public function edit(string $id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.heroes.edit', compact('hero'));
    }

    public function update(Request $request, string $id)
    {
        $hero = Hero::findOrFail($id);

        $data['images'] = $hero->images;

        if ($request->hasFile('images.en')) {
            if (isset($hero->images['en']) && Storage::disk('custom')->exists($hero->images['en'])) {
                Storage::disk('custom')->delete($hero->images['en']);
            }
            $data['images']['en'] = $request->file('images.en')->store('heroes', 'custom');
        }

        if ($request->hasFile('images.ch')) {
            if (isset($hero->images['ch']) && Storage::disk('custom')->exists($hero->images['ch'])) {
                Storage::disk('custom')->delete($hero->images['ch']);
            }
            $data['images']['ch'] = $request->file('images.ch')->store('heroes', 'custom');
        }

        $i = $hero->update($data);


        return $i
            ? redirect()->route('hero.index')->with('success', 'Hero Banner has been updated successfully!')
            : redirect()->back()->with('error', 'Failed to update Hero Banner.')->withInput();
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            Hero::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }

    public function delete(string $id)
    {
        $hero = Hero::findOrFail($id);

        if (isset($hero->images['en']) && Storage::disk('custom')->exists($hero->images['en'])) {
            Storage::disk('custom')->delete($hero->images['en']);
        }

        if (isset($hero->images['ch']) && Storage::disk('custom')->exists($hero->images['ch'])) {
            Storage::disk('custom')->delete($hero->images['ch']);
        }

        $i = $hero->delete();

        return $i
            ? redirect()->route('hero.index')->with('success', 'Hero Banner deleted successfully!')
            : redirect()->back()->with('error', 'Failed to delete Hero Banner.');
    }
}
