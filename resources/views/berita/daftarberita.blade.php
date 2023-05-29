@extends('layouts.main')
@section('maincontainer')
    <section class="videonews">
        @if ($berita)
            <div class="infovideo">
                <small>Oleh: {{ $berita->author }} | {{ $berita->created_at->format('d-m-Y') }}</small>
                <h3 class="judulvideo"><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                <p class="excerptsnews">{{ $berita->excerpts }}</p>
            </div>
            <div class="videocontainer">
                <iframe
                    src="{{ \Illuminate\Support\Str::replaceFirst('youtu.be', 'www.youtube.com/embed', $berita->url_video) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        @endif
    </section>

    <section class="headline">
        <div class="carousel-container2">
            <div id="carousel" class="carousel">
                @foreach ($beritas->where('headline', true)->take(4) as $berita)
                    <div class="carousel-slide">
                        {{-- <div class="carousel-judul-wrap">
                            <h2 class="carousel-judul"><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h2>
                        </div> --}}
                        <img class="gbrcarous" src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}"
                            alt="Gambar Berita">
                        <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                        <h2 class="carousel-judul2"><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h2>
                        <p>{{ Str::limit($berita->excerpts, 200) }}</p>
                    </div>
                @endforeach
            </div>
            {{-- <span class="carousel-prev" onclick="plusSlides(-1)">&#10094;</span>
            <span class="carousel-next" onclick="plusSlides(1)">&#10095;</span> --}}
        </div>
        <div class="berita-utama">
            <h3 class="caption_berita_utama">BERITA UTAMA :</h3>
            <div class="berita-utama-wrap">
                @foreach ($beritas->where('kategori_berita_id', 2)->take(4) as $berita)
                    <div class="berita-item">
                        <h5><a href="/berita/{{ $berita->slug }}">{{ Str::limit($berita->judul, 90) }}</a></h5>
                        <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita"
                            height="100">
                        {{-- <small>Penulis: {{ $berita->author }}</small> --}}
                        {{-- <small>{{ Str::limit($berita->excerpts) }}</small> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="daftarberita">
        {{-- @for ($i = 2; $i <= 6; $i++)
            <div class="kategori-berita">
                <h2>Kategori {{ $i }}</h2>
                @foreach ($beritas->where('kategori_berita_id', $i)->take(10) as $berita)
                    <div class="berita-item">
                        <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                        <small>Penulis: {{ $berita->author }}</small>
                        <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita"
                            height="100">
                        <p>{{ $berita->excerpts }}</p>
                    </div>
                @endforeach
            </div>
        @endfor --}}
        <div class="berita-pengumuman setfontberita">
            <h4>PENGUMUMAN :</h4>
            @foreach ($beritas->where('kategori_berita_id', 5)->take(5) as $berita)
                <div class="berita-item">
                    <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                    <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                    {{-- <small>Penulis: {{ $berita->author }}</small>
                    <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita" height="100"> --}}
                    <p class="ringkasanbrita">{{ $berita->excerpts }}</p>
                </div>
            @endforeach
        </div>
        <div class="berita-loker setfontberita">
            <h4>LOWONGAN KERJA :</h4>
            @foreach ($beritas->where('kategori_berita_id', 6)->take(5) as $berita)
                <div class="berita-item">
                    <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                    <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                    {{-- <small>Penulis: {{ $berita->author }}</small>
                    <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita" height="100"> --}}
                    <p class="ringkasanbrita">{{ $berita->excerpts }}</p>
                </div>
            @endforeach
        </div>
        <div class="berita-lokal setfontberita">
            <h4>DAERAH : </h4>
            @foreach ($beritas->where('kategori_berita_id', 3)->take(5) as $berita)
                <div class="berita-item">
                    <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                    <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                    {{-- <small>Penulis: {{ $berita->author }}</small>
                    <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita" height="100"> --}}
                    <p class="ringkasanbrita">{{ $berita->excerpts }}</p>
                </div>
            @endforeach
        </div>
        <div class="berita-nasional setfontberita">
            <h4>NASIONAL : </h4>
            @foreach ($beritas->where('kategori_berita_id', 4)->take(5) as $berita)
                <div class="berita-item">
                    <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                    <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                    {{-- <small>Penulis: {{ $berita->author }}</small>
                    <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita" height="100"> --}}
                    <p class="ringkasanbrita">{{ $berita->excerpts }}</p>
                </div>
            @endforeach
        </div>
        <div class="berita-infoadmin setfontberita">
            <h4>PEMBERITAHUAN ADMIN :</h4>
            @foreach ($beritas->where('kategori_berita_id', 1)->take(5) as $berita)
                <div class="berita-item">
                    <h3><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h3>
                    <small>Oleh: {{ $berita->author }} | {{ $berita->created_at }}</small>
                    {{-- <small>Penulis: {{ $berita->author }}</small>
                    <img src="{{ asset('images/gbrberita/' . $berita->gbr_berita) }}" alt="Gambar Berita" height="100"> --}}
                    <p class="ringkasanbrita">{{ $berita->excerpts }}</p>
                </div>
            @endforeach
        </div>
        <div class="kearsipberita">
            <a href="{{ route('arsip-berita') }}">Lihat Arsip Berita Lama</a>
        </div>
    </section>


    {{-- badian push ke stack js --}}
    @push('scripts')
        <script>
            let slideIndex = 0;
            const slides = document.getElementsByClassName("carousel-slide");

            function showSlides() {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 4000); // Change image every 4 seconds
            }

            function plusSlides(n) {
                slideIndex += n;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                if (slideIndex < 1) {
                    slideIndex = slides.length
                }
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }

            showSlides();
        </script>
    @endpush
@endsection
