<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWhimRequest;
use App\Models\Whim;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function update(Request $request, Whim $whim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whim $whim)
    {
        //
    }
}
