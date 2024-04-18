<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.settings.index', ['allSettings' => getAllSettings()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $key)
    {
        $response = updateSettings($key, $request->settings_value);

        if ($response) {
            toast()->success('Best wishes', 'Settings updated successfully.');

            return back();
        }

        toast()->error('Failed', 'Settings Updated Failed.');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $key)
    {
        if (deleteSettings($key)) {
            toast()->success('Best wishes', 'Settings deleted successfully.');

            return back();
        }

        toast()->error('Failed', 'Settings Deleted Failed.');

        return back();
    }
}
