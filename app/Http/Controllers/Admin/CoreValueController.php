<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use Illuminate\Http\Request;

class CoreValueController extends Controller
{
    public function index(Request $request)
    {
        $core_values = CoreValue::get();
        return view('admin.coreValues.index', compact('core_values'));
    }

    public function edit(string $id)
    {
        $core_value = CoreValue::findOrFail($id);
        return view('admin.coreValues.edit', compact('core_value'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
            'content.en' => 'nullable|string',
            'content.ch' => 'nullable|string',
        ]);

        $core_value = CoreValue::findOrFail($id);

        $core_value->update([
            'title' => [
                'en' => $validated['title']['en'] ?? null,
                'ch' => $validated['title']['ch'] ?? null,
            ],
            'content' => [
                'en' => $validated['content']['en'] ?? null,
                'ch' => $validated['content']['ch'] ?? null,
            ],
        ]);

        return redirect()->route('core_value.index')->with('success', 'Core Value has been updated successfully.');
    }

    public function delete(string $id)
    {
        $core_value = CoreValue::findOrFail($id);
        $i = CoreValue::where('id', $id)->delete();


        if ($i) {
            return redirect()->route('core_value.index');
        } else {
            return redirect()->back();
        }
    }
}
