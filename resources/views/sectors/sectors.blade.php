@extends('layouts.main')

@section('maincontainer')
    <section class="bu_atas">
        <div class="burger-bidangusaha bu-dropdown">
            <input type="text" class="bu-textbox" placeholder="Pilih Bidang Usaha :" readonly>
            <div class="bu-wrap">
                @foreach ($sector_categories as $sector_category)
                    <div class="bu-option">{{ $sector_category->name }}

                        @foreach ($sector_category->sectors as $sector)
                            <div class="bu-suboption">
                                <a href="{{ route('sectors.showSector', $sector->slug) }}" class="sector-link"
                                    data-ajax>{{ $sector->name }}</a>
                            </div>
                        @endforeach


                    </div>
                @endforeach
            </div>
        </div>
        <div class="konten-bidangusaha">
            <div class="main-bidangusaha" id="main-bidangusaha">
                <div id="product-detail-container">
                    <!-- Konten dari show_sector.blade.php akan ditampilkan di sini -->
                </div>
            </div>

        </div>

    </section>


    <script>
        let dropdown = document.querySelector('.bu-dropdown');
        let frame = document.querySelector('.bu-wrap');
        dropdown.onclick = function() {
            dropdown.classList.toggle('active-bu');
            // frame.classList.toggle('active-frame');
        };
    </script>

    {{-- @push('scripts') --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[data-ajax]');
            links.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    fetch(link.href, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.text())
                        .then(html => {
                            const container = document.getElementById(
                                'product-detail-container');
                            container.innerHTML = html;

                            // Memanipulasi gambar setelah dokumen dimuat
                            const images = container.querySelectorAll('img');
                            images.forEach(image => {
                                image.addEventListener('load', function() {
                                    if (window.innerWidth <= 767 && this
                                        .naturalWidth > 720) {
                                        this.style.width = '380px';
                                        this.style.height = 'auto';
                                    }
                                });
                            });
                        });
                });
            });
        });
    </script>
    {{-- @endpush --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Memilih elemen gambar di dalam section
            var images = document.querySelectorAll("#dynamic-section img");

            // Memanipulasi gambar setelah selesai dimuat
            images.forEach(function(image) {
                image.addEventListener("load", function() {
                    // Periksa apakah gambar memiliki rasio lebar dan tinggi
                    if (this.naturalWidth && this.naturalHeight) {
                        // Mengatur gambar untuk mengikuti lebar dan komposisi rasio yang sesuai
                        this.style.width = "100%";
                        this.style.height = "auto";
                        this.style.objectFit = "cover"; // Atau "contain" sesuai kebutuhan Anda
                    }
                });
            });
        });
    </script>
@endsection
