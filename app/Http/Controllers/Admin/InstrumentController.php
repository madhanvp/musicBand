<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InstrumentController extends Controller
{
    public function index()
    {
        $instruments = Instrument::latest()->get();

        return view('admin.instruments.index', compact('instruments'));
    }
    public function create()
    {
        return view('admin.instruments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);
        
        $data = $request->only(['name', 'type']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $fileName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            $data['image'] = $image->storeAs('instruments', $fileName, 'public');
        }

        Instrument::create($data);

        return redirect()
            ->route('admin.instruments.index')
            ->with('success', 'Instrument created successfully.');
    }

    public function edit(Instrument $instrument)
    {
        return view('admin.instruments.edit', compact('instrument'));
    }

    public function update(Request $request, Instrument $instrument)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $data = $request->only(['name', 'type']);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($instrument->image && Storage::disk('public')->exists($instrument->image)) {
                Storage::disk('public')->delete($instrument->image);
            }

            $image = $request->file('image');

            $fileName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            $data['image'] = $image->storeAs('instruments', $fileName, 'public');
        }

        $instrument->update($data);

        return redirect()
            ->route('admin.instruments.index')
            ->with('success', 'Instrument updated successfully.');
    }

    public function destroy(Instrument $instrument)
    {
        if ($instrument->image && Storage::disk('public')->exists($instrument->image)) {
            Storage::disk('public')->delete($instrument->image);
        }

        $instrument->delete();

        return redirect()
            ->route('admin.instruments.index')
            ->with('success', 'Instrument deleted successfully.');
    }
}