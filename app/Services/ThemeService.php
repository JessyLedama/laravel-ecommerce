<?php

namespace App\Services;

use App\Models\Theme;
use App\Services\SlugService;
use App\Services\StatusService;

class ThemeService
{
    /**
     *  Get themes.
     *  Returns a collection.
     */
    public static function themes()
    {
        $theme = Theme::paginate(5);

        return $theme;
    }

    /**
     *  Store a new theme.
     *  A company can have multiple themes, but only one may be active at a time
     *  Form data always comes to the service as $validated.
     */
    public static function store($validated)
    {
        $slug = SlugService::make($validated['name']);
        $status = StatusService::inactive();

        $favicon = $validated['favicon']->store('favicons', ['disk' => 'public']);

        $validated['slug'] = $slug;
        $validated['status_id'] = $status->id;
        $validated['favicon'] = $favicon;

        $theme = Theme::create($validated);

        session()->flash('success', 'Theme stored.');

        return $theme;
    }

    /**
     *  Get the active theme.
     *  Returns an object.
     */
    public static function active()
    {
        $status = StatusService::active();

        $theme = Theme::where('status_id', $status->id)->first();

        return $theme;
    }
}