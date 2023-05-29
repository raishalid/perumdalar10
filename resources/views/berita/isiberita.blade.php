@extends('layouts.main')

@section('maincontainer')
    <section class="isiberitanya">
        <a href="{{ route('berita.daftarberita') }}">Kembali ke Berita Terbaru</a>
        <div class="perberitawrap">
            {{-- <h1 class="judulisiberita">Isi Berita</h1> --}}
            <h2 class="judulperberita">{{ $berita->judul }}</h2>
            <small class="authorperberita">Penulis: {{ $berita->author }} | Kategori:
                {{ $berita->kategori_berita->kategori_berita }}</small>
            <small>{{ $berita->created_at }}</small>
            <div class="img-wrapperperberita">
                <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita">
            </div>
            <p class="isiperberita">{!! $berita->isi_berita !!}</p>
        </div>
    </section>
@endsection
