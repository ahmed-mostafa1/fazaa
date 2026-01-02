<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'text'  => 'nullable|string',
            'icon'  => 'nullable|string|max:255',
        ]);

        Feature::create($data);

        return redirect()->route('admin.features.index')
                         ->with('status', 'Feature created successfully.');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'text'  => 'nullable|string',
            'icon'  => 'nullable|string|max:255',
        ]);

        $feature->update($data);

        return redirect()->route('admin.features.index')
                         ->with('status', 'Feature updated successfully.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')
                         ->with('status', 'Feature deleted successfully.');
    }
}
