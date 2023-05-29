@extends('layouts.main')
@section('maincontainer')
    {{-- <hr style="border-top: 1px solid grey;"> --}}
    <div class="search-container">
        <a href="{{ route('berita.daftarberita') }}">Kembali ke Berita Terbaru</a>
        <form action="{{ route('arsip-berita') }}" method="GET" onsubmit="return handleSearch()">
            <input type="text" name="search" id="search-input" placeholder="Cari berita...">
            <button type="submit" id="search-button">Cari</button>
        </form>

        @if ($beritas->count() > 0 && request()->has('search'))
            <div class="search-results">
                <h3>Hasil Pencarian:</h3>
                <ul>
                    {{-- @foreach ($beritas as $berita)
                        <li><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></li>
                    @endforeach
                </ul> --}}
            </div>
        @elseif(request()->has('search'))
            <div class="search-results">
                <p>Maaf, berita yang dimaksud tidak ada atau mungkin telah dihapus dari data yang ada.</p>
            </div>
        @endif


    </div>
    <hr style="border-top: 1px solid grey;">

    <div class="berita-grid">
        @foreach ($beritas as $berita)
            <div class="berita-item">
                <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                <p>{{ $berita->created_at->format('d M Y H:i') }} | Kategori:
                    {{ $berita->kategori_berita->kategori_berita }}</p>

                <p>{{ Str::limit($berita->excerpts, 100) }}</p>
            </div>
        @endforeach
    </div>
    {{-- push lazy loading script : --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const beritaCells = document.querySelectorAll('.berita-cell');

                beritaCells.forEach(cell => {
                    cell.addEventListener('scroll', () => {
                        if (cell.scrollTop + cell.clientHeight >= cell.scrollHeight) {
                            // Implementasikan logika untuk memuat lebih banyak berita di sini
                        }
                    });
                });
            });
            // 
            // 
        </script>
        // //
        //
    @endpush
@endsection
