<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="image/x-icon">

    {{-- <link rel="stylesheet" href="css/styles.css" /> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newsstyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myberita.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycarousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bidangusaha.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project_card.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}"> --}}
    <title>Perumda Utama Sultra </title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css"
        integrity="sha512-l9T0T+TslCxnQwCCVr6xJb+s7VlYvY/pEaVJl9m8z3ge/0tRoYYwix0dcM+NxQ2heWkRv0d0JmfUIF9XhucfCQ=="
        crossorigin="anonymous" /> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" --}}
    {{-- integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
</head>

<body>
    <header class="navbar2">
        <div class="navbar-container2">
            <div class="logo2"><img src="{{ asset('images/logo.png') }}" alt="" /></div>
            <div class="company-name2">Perumda Utama Sultra</div>
            <div class="burger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <nav class="menu2">
            <li><a class="dmenu" href="/">Beranda</a></li>
            <li><a class="dmenu" href="/berita">Berita</a></li>
            <li><a class="dmenu" href="/sector">Bidang Usaha</a></li>
            <li><a class="dmenu" href="/projects">Proyek</a></li>
            <li><a class="dmenu" href="/projects">Produk</a></li>
            @guest
                <li><a class="dmenu" href="{{ route('login') }}">Login</a></li>
            @else
                <li class="liuser"><a href="#" class="namauser">{{ Auth::user()->name }} &#9660 </a>
                    <ul class="bungkus">
                        @if (Auth::user()->hasRole('admin'))
                            <li> <a class="dditem" href="{{ route('updateagent') }}">Dashboard</a> </li>
                            <li><a href="http://localhost/test" target="_blank" class="dditem">Application Settings</a>
                            </li>
                            {{-- <li><a href="{{ route('about') }}">Manage Users</a></li> --}}
                        @elseif(Auth::user()->hasRole('journalist'))
                            <li> <a class="dditem" href="{{ route('updateagent') }}">Journalist Dashboardt</a> </li>
                        @else
                            {{-- {{ route('default.page') }}
                                {{ route('journalist.dashboard') }}
                                {{ route('dashboard') }} --}}
                            <!-- Tautan default untuk pengguna yang tidak memiliki peran -->
                            <li><a class="dditem" href="">Default Page</a></li>
                        @endif
                        <hr class="divider dditem">
                        <li><a class="dditem" href="#">Informasi Penting</a></li>
                        <li><a class="dditem" href="#">Chat dengan kami</a></li>
                        <li><a class="dditem" href="#">FAQ</a></li>
                        {{-- <li><a href="{{ route('about') }}">Manage Users</a></li> --}}
                        <li>
                            <hr class="divider dditem">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="tombolout dditem">Logout</button>
                            </form>
                        </li>
                    </ul>



                </li>




                </div>

            @endguest
        </nav>

    </header>

    @yield('maincontainer')
    <!-- Site footer -->
    <section class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/invest">Penawaran Investasi</a></li>
                        <li><a href="/product">Produk Usaha</a></li>
                        <li><a href="/form">Formulir UMKM</a></li>
                        <li><a href="/privacy">Perjanjian Privasi</a></li>
                    </ul>
                </div>

                <div class="footer-col wider">
                    <h4>Segera Hubungi kami</h4>
                    <ul>
                        <li>Perumda Utama Sultra</li>
                        <li>Kantor : Jl. Abunawas No 191 Kota Kendari 90222</li>
                        <li>Sulawesi Tenggara - Indonesia</li>
                        <li>Telp. : (0401)3131177</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">

                        <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/linkedin.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/youtube.png') }}" alt="" /></a>
                        <a href="#"><img src="{{ asset('images/tiktok.png') }}" alt="" /></a>
                    </div>
                    <p>Copyright &copy :</p>
                    <p>PT. Jaring Timur Indonesia - 2023</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="js/scripts.js"></script> --}}

    <script src="{{ asset('js/scripts.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-BJx/xpG6H7YBEE1gjUf4S9XzC/2vMtkRyZ0D1+EjK3DmnsmmOTPB6ZM5JB5ESP9B0g8fUzL6FyG53pS0SfWg6Q=="
        crossorigin="anonymous"></script> --}}
    {{-- <script src="bootstrap5/bootstrap.bundle.min.js"></script> --}}
    @stack('scripts')
    <script>
        const burger = document.querySelector('.burger');
        const menu = document.querySelector('.menu2');

        burger.addEventListener('click', () => {
            menu.classList.toggle('responsive');
        });
    </script>

</body>

</html>
