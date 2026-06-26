<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWhimRequest;
use App\Http\Requests\UpdateWhimRequest;
use App\Models\Whim;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WhimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('whims');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWhimRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('whims', 'public');
        }

        Auth::user()->whims()->create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.whims')
            ->with('success', 'Whim created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Whim $whim)
    {
        return view('admin.show', [
            'whim' => $whim,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whim $whim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWhimRequest $request, $id)
    {
        $whim = Whim::findOrFail($id);

        $data = $request->safe()->except(['image']);

        $image = $whim->image_path;

        if ($request->hasFile('image')) {
            if ($image && Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }

            $newPath = $request->file('image')->store('whims', 'public');

            $data['image_path'] = $newPath;
        }

        $whim->update($data);

        return back()->with('success', 'Whim updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whim $whim)
    {
        if ($whim->image_path && Storage::disk('public')->exists($whim->image_path)) {
            Storage::disk('public')->delete($whim->image_path);
        }

        $whim->delete();

        return redirect()->route('admin.whims');
    }
}
