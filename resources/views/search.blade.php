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
    <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
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
        <section class="bg-kos-search">
            <div class="container">
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="kos-search-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        <h2>Kos 5 Star Tanjung Duren</h2>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-icon">
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            <div class="price">Rp. 1,600,000</div>
                                            <span>/ bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="kos-search-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        <h2>Kos 5 Star Tanjung Duren</h2>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-icon">
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            <div class="price">Rp. 1,600,000</div>
                                            <span>/ bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="kos-search-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        <h2>Kos 5 Star Tanjung Duren</h2>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-icon">
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            <div class="price">Rp. 1,600,000</div>
                                            <span>/ bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="kos-search-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        <h2>Kos 5 Star Tanjung Duren</h2>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-icon">
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            <div class="price">Rp. 1,600,000</div>
                                            <span>/ bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="kos-search-card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="kos-search-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="kos-search-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12">
                            <div class="kos-search-desc">
                                <div class="desc-title">
                                    <div>
                                        <h2>Kos 5 Star Tanjung Duren</h2>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-icon">
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 no-padding">
                                        <div class="kos-search-price">
                                            <div class="price">Rp. 1,600,000</div>
                                            <span>/ bulan</span>
                                        </div>
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