<?php

namespace App\Http\Controllers;

use App\Services\ThemeService;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = ThemeService::themes();

        return view('admin.theme.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.theme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'unique:themes', 'max:255'],
            'favicon' => ['mimes:jpg,jpeg,png,gif,svg'],
            'primary_color' => ['string'],
            'secondary_color' => ['string'],
            'title_font' => ['string'],
            'content_font' => ['string'],
            'header_color' => ['string'],
            'footer_color' => ['string'],
        ]);

        $theme = ThemeService::store($validated);

        return redirect()->route('admin.theme.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Theme $theme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        //
    }
}