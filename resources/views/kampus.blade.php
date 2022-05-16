<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KostIn - Penyedia Kos Mahasiswa</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kampus.css') }}">
    <!-- Extention Link -->
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>
    <div class="wrapper">
        <div class="blue-background">
            <header>
                <div class="container">
                    <nav>
                        <div class="logo">
                            <span>KostIn</span>
                        </div>
                        <ul>
                            <li><a href="{{ route('welcome') }}">Beranda</a></li>
                            <li><a href="{{ route('area') }}">Area</a></li>
                            <li><a href="{{ route('kampus') }}">Kampus</a></li>
                            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        </ul>
                        <div class="btn-header">
                            <a href="{{ route('login') }}">Masuk</a>
                        </div>
                    </nav>
                </div>
             </header>
             <section class="bg-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <h1>Kampus Poluper</h1>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="top-campus-card">
                                <div class="top-campus-img">
                                    <img src="{{ asset('assets/images/ITB.png') }}" alt="Binus">
                                </div>
                                <div class="top-campus-desc">
                                    <h3>Institut Teknologi Bandung</h3>
                                    <p>
                                        Jl. Ganesa No.10, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
                                    </p>
                                    <a href="#">Cek Kos Sekitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="top-campus-card">
                                <div class="top-campus-img">
                                    <img src="{{ asset('assets/images/UNPAD.png') }}" alt="Unpad">
                                </div>
                                <div class="top-campus-desc">
                                    <h3>Universitas Padjadjaran</h3>
                                    <p>
                                        Jl. Raya Bandung Sumedang KM.21, Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363
                                    </p>
                                    <a href="#">Cek Kos Sekitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </div>
        <section class="bg-other-kampus">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h2>Kampus Lain</h2>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="{{ asset('assets/images/UI.png') }}" alt="UI" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UI</h3>
                                        <p>Jakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UB.png" alt="UB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UB</h3>
                                        <p>Malang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITS.png" alt="ITS" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITS</h3>
                                        <p>Surabaya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UGM.png" alt="UGM" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UGM</h3>
                                        <p>Yogyakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/IPB.png" alt="IPB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>IPB</h3>
                                        <p>Bogor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITB.png" alt="ITB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITB</h3>
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UI.png" alt="UI" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UI</h3>
                                        <p>Jakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UB.png" alt="UB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UB</h3>
                                        <p>Malang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITS.png" alt="ITS" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITS</h3>
                                        <p>Surabaya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UGM.png" alt="UGM" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UGM</h3>
                                        <p>Yogyakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/IPB.png" alt="IPB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>IPB</h3>
                                        <p>Bogor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITB.png" alt="ITB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITB</h3>
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UI.png" alt="UI" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UI</h3>
                                        <p>Jakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UB.png" alt="UB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UB</h3>
                                        <p>Malang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITS.png" alt="ITS" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITS</h3>
                                        <p>Surabaya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/UGM.png" alt="UGM" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>UGM</h3>
                                        <p>Yogyakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/IPB.png" alt="IPB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>IPB</h3>
                                        <p>Bogor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="kos-kampus-card">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <img src="assets/images/ITB.png" alt="ITB" class="w-100">
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="kos-kampus-text">
                                        <h3>ITB</h3>
                                        <p>Bandung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="footer-info">
                            <h2>KostIn</h2>
                            <p>
                                Cara Mudah Mencari Kos Yang Sesuai. Mencari kos menjadi lebih mudah dengan berbagai fitur penunjang untuk memudahkan dalam menyesuaikan dengan keinginan anda
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="footer-section">
                            <h3>Related Links</h3>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Area</a></li>
                                <li><a href="#">Kampus</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="footer-section">
                            <h3>Social Media</h3>
                            <div class="footer-sosmed">
                                <i class='bx bxl-facebook-circle'></i><i class='bx bxl-instagram-alt'></i><i class='bx bxl-whatsapp'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer-copyright">
                    <span>&copy; Copyright 2022 . KostIn</span>
                    <span class="footer-logo">KostIn</span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>