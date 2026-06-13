<?php

namespace App\Http\Controllers;

use App\Models\Whim;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Whim $whim)
    {
        //
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
