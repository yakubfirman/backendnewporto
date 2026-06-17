<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Setting::orderBy('group')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255|unique:settings',
            'value' => 'nullable|string',
            'type' => 'required|string|max:255',
            'group' => 'required|string|max:255',
        ]);

        $setting = Setting::create($data);
        return response()->json($setting, 201);
    }

    public function show(Setting $setting)
    {
        return response()->json($setting);
    }

    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'key' => 'sometimes|required|string|max:255|unique:settings,key,' . $setting->id,
            'value' => 'nullable|string',
            'type' => 'sometimes|required|string|max:255',
            'group' => 'sometimes|required|string|max:255',
        ]);

        $setting->update($data);
        return response()->json($setting);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->json(null, 204);
    }
}
