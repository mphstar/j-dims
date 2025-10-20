<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    // GET /api/pariwisata - list all pariwisata with overlays
    public function index(Request $request)
    {
        $query = Pariwisata::with(['overlays']);

        // Optional: simple pagination support
        $perPage = (int) $request->query('per_page', 0);
        if ($perPage > 0) {
            return response()->json($query->paginate($perPage));
        }

        $data = $query->get();
        return response()->json($data);
    }

    // GET /api/pariwisata/{slug} - detail by slug with overlays
    public function show(string $slug)
    {
        $item = Pariwisata::with(['overlays'])->where('slug', $slug)->firstOrFail();
        return response()->json($item);
    }
}
