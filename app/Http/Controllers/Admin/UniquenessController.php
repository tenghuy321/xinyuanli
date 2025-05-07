<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Uniqueness;
use Illuminate\Http\Request;

class UniquenessController extends Controller
{
    public function index(Request $request)
    {
        $uniqs = Uniqueness::get();
        return view('admin.uniqueness.index', compact('uniqs'));
    }

    public function create()
    {
        return view('admin.uniqueness.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
            'content.en' => 'nullable|string',
            'content.ch' => 'nullable|string',
        ]);

        Uniqueness::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('uniqueness.index')->with('success', 'Uniqueness content saved successfully.');
    }

    public function edit(string $id)
    {
        $uniq = Uniqueness::findOrFail($id);
        return view('admin.uniqueness.edit', compact('uniq'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
            'content.en' => 'nullable|string',
            'content.ch' => 'nullable|string',
        ]);

        $uniq = Uniqueness::findOrFail($id);

        $uniq->update([
            'title' => [
                'en' => $validated['title']['en'],
                'ch' => $validated['title']['ch'],
            ],
            'content' => [
                'en' => $validated['content']['en'] ?? null,
                'ch' => $validated['content']['ch'] ?? null,
            ],
        ]);

        return redirect()->route('uniqueness.index')->with('success', 'Uniqueness has been updated successfully.');
    }
}
