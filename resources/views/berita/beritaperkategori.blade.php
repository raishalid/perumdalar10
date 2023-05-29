@extends('layouts.maincucu')

@section('maincontainer')
    <h1>Berita per Kategori: {{ $kategori_berita->kategori_berita }}</h1>
    @foreach ($beritas as $berita)
        <h2><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h2>
        <small>Penulis: {{ $berita->author }} | Kategori: <a
                href="/berita/kategori/{{ $berita->kategori_berita->slug }}">{{ $berita->kategori_berita->kategori_berita }}</a></small>
        <p>{{ $berita->excerpts }}</p>
    @endforeach
@endsection
