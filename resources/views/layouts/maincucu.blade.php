<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="css/styles.css" /> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newsstyles.css') }}" rel="stylesheet">
    <title>Perumda Utama Sultra </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
</head>

<body>
    <header class="navbar">
        <div class="navbar-container">
            <div class="logo"><img src="../../images/logo.png" alt="" /></div>
            <div class="company-name">Perumda Utama Sultra</div>
            <nav class="menu">
                <a href="/">Beranda</a>
                <a href="/product">Produk</a>
                <a href="/invest">Investasi</a>
                <a href="/berita">Berita</a>
            </nav>
        </div>
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
                        <a href="#"><img src="../../images/facebook.png" alt="" /></a>
                        <a href="#"><img src="../../images/twitter.png" alt="" /></a>
                        <a href="#"><img src="../../images/linkedin.png" alt="" /></a>
                        <a href="#"><img src="../../images/instagram.png" alt="" /></a>
                        <a href="#"><img src="../../images/youtube.png" alt="" /></a>
                        <a href="#"><img src="../../images/tiktok.png" alt="" /></a>
                    </div>
                    <p>Copyright &copy :</p>
                    <p>PT. Jaring Timur Indonesia - 2023</p>
                </div>
            </div>
        </div>
    </section>
    {{-- <script src="js/scripts.js"></script> --}}
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>
