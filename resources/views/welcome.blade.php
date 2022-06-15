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
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
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
                        <div class="col-xl-6 col-lg-6 col-sm-12">
                            <div class="banner-text">
                                <h1>Cara Mudah Mencari Kos Yang Sesuai</h1>
                                <p>
                                    Mencari kos menjadi lebih mudah dengan berbagai fitur penunjang untuk memudahkan dalam menyesuaikan dengan keinginan anda
                                </p>
                                <div class="banner-number">
                                    <div><span>100+</span>Kos Terdaftar</div>
                                    <div><span>1K+</span>Pengguna</div>
                                    <div><span>10K+</span>Transaksi</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-12">
                            <div class="banner-img">
                                <img src="{{ asset('assets/images/banner.png') }}" alt="Banner Image" class="w-100">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="banner-search">
                                <form action="">
                                    <div>
                                        <label for="">Nama Kos</label>
                                        <input type="text" placeholder="Nama Kos">
                                    </div>
                                    <div>
                                        <label for="">Area</label>
                                        <input type="text" placeholder="Area">
                                    </div>
                                    <div>
                                        <label for="">Harga</label>
                                        <div class="harga">
                                            <input type="text" placeholder="Minimal">
                                            <input type="text" placeholder="Maksimal">
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn-cari"><i class='bx bx-search'></i>Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </div>
        <section class="bg-kos-populer">
            <div class="container">
                <h2>Kos Populer Sekitar Anda</h2>
                <div class="row">
                    @foreach ($dataKost as $dataKosts)
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="kos-card">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-img">
                                        <img src="{{ asset('Album/Kost/' . $dataKosts->gambarKost) }}" alt="Kos">
                                        <div class="blackdrop">
                                            <div class="kos-type">{{ $dataKosts->tipeKost }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-detail">
                                        <h3>{{ $dataKosts->nameKost }}</h3>
                                        <span>{{ $dataKosts->kecamatanKost }}, {{ $dataKosts->kabupatenKost }}</span>
                                        <div class="kos-icon">
                                            @foreach ($facility as $facilities)
                                            {!! $facilities->facilityKost !!}
                                            @endforeach
                                        </div>
                                        <span class="kos-price">Rp. {{ $dataKosts->hargaKost }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="bg-area-populer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="area-populer-img">
                            <img src="{{ asset('assets/images/map.png') }}" alt="Area Populer" class="w-100">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <h2>Area Kos Populer</h2>
                            </div>
                            @foreach ($area as $areas)
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="area-populer-card">
                                    <img src="{{ asset('Album/' . $areas->picture) }}" alt="Jakarta" class="w-100">
                                    <span>{{ $areas->provinsi }}</span>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-xl-12 col-lg-12">
                                <a href="#" class="btn-area-populer">Area Kos Lain</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-kos-kampus">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h2>Kos Sekitar Kampus</h2>
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
                                    <img src="{{ asset('assets/images/UB.png') }}" alt="UB" class="w-100">
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
                                    <img src="{{ asset('assets/images/ITS.png') }}" alt="ITS" class="w-100">
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
                                    <img src="{{ asset('assets/images/UGM.png') }}" alt="UGM" class="w-100">
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
                                    <img src="{{ asset('assets/images/IPB.png') }}" alt="IPB" class="w-100">
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
                                    <img src="{{ asset('assets/images/ITB.png') }}" alt="ITB" class="w-100">
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