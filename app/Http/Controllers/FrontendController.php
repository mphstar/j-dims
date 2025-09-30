<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {
        $pariwisata = Pariwisata::with('overlays')->get();
        $setting = Setting::first();
        
        return Inertia::render('frontend/PariwisataView', [
            'pariwisata' => $pariwisata,
            'setting' => $setting ?: ['style' => 'column'],
        ]);
    }

    public function show($slug)
    {
        $pariwisata = Pariwisata::with('overlays')->where('slug', $slug)->firstOrFail();
        
        return Inertia::render('frontend/PariwisataDetail', [
            'pariwisata' => $pariwisata,
        ]);
    }
}