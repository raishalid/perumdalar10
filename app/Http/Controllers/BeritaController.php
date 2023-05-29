<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    //
    // public function daftarBerita()
    // {
    //     $beritas = Berita::with('kategori_berita')->latest('created_at')->take(20)->get();
    //     return view('berita.daftarberita', ['beritas' => $beritas]);
    // }

    public function daftarBerita()
    {

        $kategoriIds = [1, 2, 3, 4, 5, 6];
        $limits = [2, 5, 5, 5, 5, 5];

        $cases = '';
        for ($i = 0; $i < count($kategoriIds); $i++) {
            $cases .= "WHEN kategori_berita_id = {$kategoriIds[$i]} THEN {$limits[$i]} ";
        }

        $beritas = Berita::query()
            ->select(DB::raw("beritas.*, ROW_NUMBER() OVER (PARTITION BY kategori_berita_id ORDER BY created_at DESC) AS row_num"))
            ->whereIn('kategori_berita_id', $kategoriIds);

        $filteredBeritas = DB::table(DB::raw("({$beritas->toSql()}) AS sub"))
            ->mergeBindings($beritas->getQuery())
            ->select('*')
            ->whereRaw("row_num <= (CASE {$cases} END)")
            ->orderBy('created_at', 'desc')
            ->take(50)
            ->get();

        $berita = Berita::whereNotNull('url_video')
            ->where('url_video', '<>', '')
            ->latest()
            ->first();

        // Kita akan memuat relasi secara manual dengan mengambil kategori berita terlebih dahulu
        $kategoriBeritaIds = $filteredBeritas->pluck('kategori_berita_id')->unique()->toArray();
        $kategoriBeritas = KategoriBerita::whereIn('id', $kategoriBeritaIds)->get()->keyBy('id');

        // Sekarang kita tambahkan relasi ke setiap item dalam $filteredBeritas
        $filteredBeritas->transform(function ($berita) use ($kategoriBeritas) {
            $berita->kategori_berita = $kategoriBeritas->get($berita->kategori_berita_id);
            return $berita;
        });


        return view('berita.daftarberita', ['beritas' => $filteredBeritas, 'berita' => $berita]);
    }



    public function isiBerita($slug)
    {
        // $berita = Berita::where('slug', $slug)->with('kategori_berita')->firstOrFail();
        $berita = Berita::where('slug', $slug)->with('kategori_berita')->firstOrFail();
        // dd($berita); // dump and die, untuk debugging
        return view('berita.isiberita', ['berita' => $berita]);
    }

    public function beritaPerKategori($slug)
    {
        $kategori_berita = KategoriBerita::where('slug', $slug)->firstOrFail();
        $beritas = $kategori_berita->beritas()->get();
        return view('berita.beritaperkategori', ['beritas' => $beritas, 'kategori_berita' => $kategori_berita]);
    }
    // untuk keperluan pada landing page mengambil berita terbaru berdasarkan 3 kategori

    // ini bagian arsipberita
    // public function arsipBerita()
    // {
    //     $kategori_ids = [2, 3, 4, 5];
    //     $beritas = Berita::whereIn('kategori_berita_id', $kategori_ids)->orderBy('created_at', 'desc')->get();
    //     return view('berita.arsipberita', ['beritas' => $beritas]);
    // }

    public function arsipBerita(Request $request)
    {
        $kategori_ids = [2, 3, 4, 5];
        $query = Berita::whereIn('kategori_berita_id', $kategori_ids);

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('judul', 'like', '%' . $search . '%');
        }

        $beritas = $query->orderBy('created_at', 'desc')->get();
        return view('berita.arsipberita', ['beritas' => $beritas]);
    }
}
