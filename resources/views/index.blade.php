@extends('layouts.main')
@section('maincontainer')
    <section class="hero">
        <div class="hero-background"></div>
        <div class="hero-foreground"></div>
        <div class="hero-text">
            <h1 data-text="KOLABORASI.INVESTASI">KOLABORASI.INVESTASI</h1>
        </div>
        <div class="hero-text-perumda">
            <h1>PERUMDA UTAMA SULTRA</h1>
        </div>
        <div class="hero-glass">
            <p>Perumda Utama Sultra mengajak investor berani menggapai kesuksesan bersama melalui peluang bisnis
                menguntungkan di Sulawesi Tenggara.</p>
            <button>Ayo kolaborasi!</button>
        </div>
    </section>
    {{-- <section>
        @if (count($dataPengumuman) > 0)
            <p>{{ $dataPengumuman[0]->judul }}</p>
            <p>{!! $dataPengumuman[0]->excerpts !!}</p>
        @else
            <p>Pengumuman</p>
            <p>Belum ada data</p>
        @endif


    </section> --}}
    <section class="mitra">
        <h1 class="mitrajudul">VISI KAMI ADALAH MENJADI PERUSAHAAN BERSKALA NASIONAL SEHAT DAN TUMBUH BERKEMBANG ATAS
            KEMANDIRIAN DAN PROFESIONAL</h1>
        <div class="progress">
            <img src="images/sultra.png" alt="" />
            <img src="images/utamalogo.png" alt="" />
            <img src="images/perdasi.png" alt="" />
        </div>
        <div class="client">
            <h1>Trusted Cooperation Partner :</h1>
            <div class="clientlogo">
                <img src="images/antamlogo.png" alt="" />
                <img src="images/logokso.png" alt="" />
                <img src="images/pertamina-logo.png" alt="" />
                <img src="images/bca.jpeg" alt="" />
                <img src="images/Bank_Mayapada.png" alt="" />
                <img src="images/banksultra.png" alt="" />
            </div>
        </div>
    </section>
    <section class="product">
        <div class="product-head">
            <h1>PELUANG KERJASAMA INVESTASI</h1>
            <p>Provinsi di Indonesia yang pembangunan daerahnya sangat pesat, Sulawesi Tenggara menawarkan beragam
                sektor investasi yang menjanjikan pertumbuhan usaha yang tinggi.</p>
        </div>
        <div class="prodcont">
            <div class="pcard">
                <div class="cardimg">
                    <img src="images/nikelman.jpeg" alt="" />
                </div>
                <div class="cardcont">
                    <h2>PERTAMBANGAN DAN ENERGI</h2>
                    <p>Kerjasama Joint Operation (JO) untuk pertambangan Nikel dan Emas. Kerjasama Penyediaan Bahan
                        Bakar melalui SPBU pada Bandara Halu Oleo dan SPBU Nelayan.</p>
                </div>
            </div>
            <div class="pcard">
                <div class="cardimg">
                    <img src="images/jagungman.jpeg" alt="" />
                </div>
                <div class="cardcont">
                    <h2>PERTANIAN PERKEBUNAN PETERNAKAN</h2>
                    <p>Kerjasama Pengelolaan Hasil Bumi Pertanian dan Perkebunan Modern. Kerjasama Peternakan Sapi
                        Potong dan Pengadaan Daging.</p>
                </div>
            </div>
            <div class="pcard">
                <div class="cardimg">
                    <img src="images/nelayanman.jpeg" alt="" />
                </div>
                <div class="cardcont">
                    <h2>PERIKANAN DAN KELAUTAN</h2>
                    <p>Kerjasama Pengelolaan dan Perdagangan Hasil Perikanan Laut. Coldstorage dan export hasil laut.
                    </p>
                </div>
            </div>
            <div class="pcard">
                <div class="cardimg">
                    <img src="images/constructor.jpeg" alt="" />
                </div>
                <div class="cardcont">
                    <h2>KONSTRUKSI DAN PEMBANGUNAN</h2>
                    <p>Kerjasama Proyek Pembangunan dan Konstruksi Infrastruktur di Sulawesi Tenggara.</p>
                </div>
            </div>
            <div class="pcard">
                <div class="cardimg">
                    <img src="images/businessman.jpeg" alt="" />
                </div>
                <div class="cardcont">
                    <h2>PERDAGANGAN DAN EKONOMI KREATIF</h2>
                    <p>Kerjasama Usaha di bidang Industri, Perdagangan dan Ekonomi Kreatif.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="invest">
        <div class="investjudul">
            <h1>PRODUK DAN JASA</h1>
            <p>Kolaborasi Perumda Utama Sultra, Pemerintah Daerah dan pihak swasta: bersinergi menghasilkan produk dan
                jasa inovatif yang mengubah cara kita berkarya dan berbisnis. Kreativitas tanpa batas menanti!</p>
        </div>
        <div class="investitem">
            <ul>
                <li>
                    <h1>Pertambangan</h1>
                    <p>Kontrak Jasa Pertambangan di wilayah Mandiodo, Lasolo, dan Lalindu dengan PT Antam Tbk.
                        Konsorsium Kerjasama Operasi Mandiodo Tapunggaya Tapumea (KSO-MTT)</p>
                </li>
                <li>
                    <h1>Depot Pengisian Pesawat Udara (DPPU) Haluoleo</h1>
                    <p>Kerjasama Operasional Antara Perumda Utama Sultra Dengan PT. Pertamina (Persero) Kerjasama
                        Operasi (KSO) Fasilitas Full System Depot Pengisian Pesawat Udara (DPPU) Bandara Halu Oleo
                        Kendari</p>
                </li>
                <li>
                    <h1>Stasiun Pengisian Bahan Bakar Umum untuk Nelayan (SPBU-N)</h1>
                    <p>SPBU Solar Subsidi dan Non Subsidi & Pelumas Mesin produk PERTAMINA di Kompleks Pelabuhan
                        Perikanan Samudera (PPS) Kendari</p>
                </li>
                <li>
                    <h1>SDM Outsourcing</h1>
                    <p>Pelatihan dan Penyediaan SDM Tenaga Kerja Out Sourcing untuk perusahaan di wilayah Sulawesi
                        Tenggara</p>
                </li>
                <li>
                    <h1>Multimedia dan Periklanan</h1>
                    <p>Jasa advertising professional untuk mencapai audience secara efektif di wilayah Sulawesi Tenggara
                    </p>
                </li>
                <li>
                    <h1>Pembinaan UMKM</h1>
                    <p>Peningkatan daya saing ekonomi masyarakat melalui pembinaan UMKM di wilayah Sulawesi Tenggara</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="about">
        <div class="abouthead">
            <h1>PERJALANAN SEJARAH PERUSAHAAN</h1>
            <p class="op">VISI KAMI ADALAH MENJADI PERUSAHAAN BERSKALA NASIONAL SEHAT DAN TUMBUH BERKEMBANG ATAS
                KEMANDIRIAN DAN PROFESIONAL</p>
            <div class="timeline">
                <div class="container leftcon">
                    <img src="images/writing.png" alt="" />
                    <div class="textbox">
                        <h2>Awal Pembentukan PT. JASA SULTRA</h2>
                        <small>1970 - 1974</small>
                        <p>Perusahaan didirikan dengan nama PT. JASA SULTRA (Perseorangan)</p>
                        <span class="leftconarrow"></span>
                    </div>
                </div>
                <div class="container rightcon">
                    <img src="images/writing.png" alt="" />
                    <div class="textbox">
                        <h2>PT. KARYA SULTRA</h2>
                        <small>1974 - 1982</small>
                        <p>Perubahan Nama Perusahaan menjadi PT. KARYA SULTRA (Perseorangan)</p>
                        <span class="rightconarrow"></span>
                    </div>
                </div>
                <div class="container leftcon">
                    <img src="images/writing.png" alt="" />
                    <div class="textbox">
                        <h2>PT. UTAMA SULTRA</h2>
                        <small>1982 - 1995</small>
                        <p>Perubahan Nama dan Badan Usaha menjadi PT. UTAMA SULTRA (Perusahaan Daerah)</p>
                        <span class="leftconarrow"></span>
                    </div>
                </div>
                <div class="container rightcon">
                    <img src="images/internet.png" alt="" />
                    <div class="textbox">
                        <h2>PD. UTAMA SULTRA</h2>
                        <small>1995 - 2019</small>
                        <p>Badan Hukum Perusahaan menjadi PD. UTAMA SULTRA (Perusahaan Daerah)</p>
                        <p>2008 Anak perusahaan PT. BAHTERA SULTRA MINING berdiri bergerak dibidang Pertambangan</p>
                        <p>2014 Anak perusahaan PT. Prima Utama Sultra berdiri bergerak dibidang Penyedia Jasa Tenaga
                            Kerja (SDM OUTSOURCING)</p>
                        <span class="rightconarrow"></span>
                    </div>
                </div>
                <div class="container leftcon">
                    <img src="images/internet.png" alt="" />
                    <div class="textbox">
                        <h2>PERUMDA UTAMA SULTRA</h2>
                        <small>2019 - sekarang</small>
                        <p>Badan Hukum Perusahaan menjadi PERUMDA UTAMA SULTRA (Perusahaan Umum Daerah)</p>
                        <p>2019 Anak perusahaan PT. UTAMA SULTRA ENERGI didirikan bergerak dibidang Pertambangan (Mining
                            Contractor)</p>
                        <p>2019 PT.UTAMA SULTRA PROPERTINDO didirikan sebagai anak perusahaan yang bergerak dibidang
                            Properti dan Konstruksi</p>
                        <p>2019 PT.UTAMA SULTRA AGROBISNIS didirikan sebagai anak perusahaan yang bergerak dibidang
                            Agrobisnis</p>
                        <p>2022 PT. MULTIMEDIA UTAMA SULTRA didirikan sebagai anak perusahaan yang bergerak dibidang
                            Multimedia dan Ekonomi Kreatif</p>
                        <span class="leftconarrow"></span>
                    </div>
                </div>
                <!-- <div class="container rightcon">
                                                <img src="images/idea.png" alt="" />
                                                <div class="textbox">
                                                  <h2>Perumda Utama Sultra</h2>
                                                  <small>2000 - 2001</small>
                                                  <p>Perumda Utama Sultra dibentuk dengan SK Gubernur no. 001/Gub/I/2000</p>
                                                  <span class="rightconarrow"></span>
                                                </div>
                                              </div>
                                              <div class="container leftcon">
                                                <img src="images/idea.png" alt="" />
                                                <div class="textbox">
                                                  <h2>Perumda Utama Sultra</h2>
                                                  <small>2000 - 2001</small>
                                                  <p>Perumda Utama Sultra dibentuk dengan SK Gubernur no. 001/Gub/I/2000</p>
                                                  <span class="leftconarrow"></span>
                                                </div>
                                              </div> -->
            </div>
        </div>
    </section>
@endsection
