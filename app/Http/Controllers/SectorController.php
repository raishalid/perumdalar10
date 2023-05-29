<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\SectorCategory;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::with('sectorCategory')->orderBy('created_at', 'desc')->get();
        $sector_categories = SectorCategory::with('sectors')->get();

        return view('sectors.index', ['sectors' => $sectors]);
    }

    public function showSector(Request $request, $slug)
    {
        $sector = Sector::with('sectorCategory')->where('slug', $slug)->firstOrFail();

        // Jika ini adalah request AJAX, kembalikan partial view
        if ($request->ajax()) {
            return view('sectors.show_sector', ['sector' => $sector])->render();
        }

        return view('sectors.show_sector', ['sector' => $sector]);
    }
}
