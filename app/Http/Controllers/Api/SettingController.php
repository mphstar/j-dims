<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // GET /api/setting - return setting record(s)
    public function index()
    {
        // Assuming single row settings, return first or empty object
        $setting = Setting::query()->first();
        return response()->json($setting);
    }

    // Optional: update settings (if needed)
    public function update(Request $request)
    {
        $data = $request->validate([
            'style' => ['nullable', 'string']
        ]);

        $setting = Setting::query()->first();
        if (!$setting) {
            $setting = new Setting();
        }
        if (array_key_exists('style', $data)) {
            $setting->style = $data['style'];
        }
        $setting->save();

        return response()->json($setting);
    }
}
