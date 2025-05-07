<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListService;
use Illuminate\Http\Request;

class ListServiceController extends Controller
{
    public function index(Request $request)
    {
        $listServices = ListService::get();
        return view('admin.listServices.index', compact('listServices'));
    }

    public function edit(string $id)
    {
        $listService = ListService::findOrFail($id);
        return view('admin.listServices.edit', compact('listService'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ch' => 'required|string|max:255',
            'content.en' => 'nullable|string',
            'content.ch' => 'nullable|string',
        ]); 

        $listService = ListService::findOrFail($id);

        $listService->update([
            'title' => [
                'en' => $validated['title']['en'],
                'ch' => $validated['title']['ch'],
            ],
            'content' => [
                'en' => $validated['content']['en'] ?? null,
                'ch' => $validated['content']['ch'] ?? null,
            ],
        ]);

        return redirect()->route('listServices.index')->with('success', 'List Service has been updated successfully.');
    }
}
