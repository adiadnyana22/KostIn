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
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <!-- Extention Link -->
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> 
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
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
             <section class="bg-detail-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="detail-img">
                                <img src="assets/images/kos.png" alt="Kos" class="w-100">
                                <div class="detail-category">
                                    <span>Putri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div class="detail-head">
                                <div class="detail-title">
                                    <div>
                                        <h1>Kos 5 Star Tanjung Duren</h1>
                                        <p>Tegal Parang, Jakarta Selatan</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bx-heart'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-price">
                                <div class="price">Rp. 1,600,000</div>
                                <span>/ bulan</span>
                            </div>
                            <form action="">
                                <div class="row" style="gap: 1rem;">
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="tanggal">Tanggal Mulai</label>
                                        <input type="date" placeholder="Tanggal Mulai" id="tanggal">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                        <label for="lama">Lama Sewa</label>
                                        <select name="" id="lama">
                                            <option value="1">1 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="9">9 Bulan</option>
                                            <option value="12">12 Bulan</option>
                                        </select>
                                    </div>
                                </div>
                                <button>Ajukan Sewa</button>
                            </form>
                        </div>
                    </div>
                </div>
             </section>
        </div>
        <section class="bg-img-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="main-carousel" data-flickity='{ "wrapAround": true, "pageDots": false }'>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail1.png" alt="Detail" class="w-100">
                            </div>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail2.png" alt="Detail" class="w-100">
                            </div>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail3.png" alt="Detail" class="w-100">
                            </div>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail4.png" alt="Detail" class="w-100">
                            </div>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail5.png" alt="Detail" class="w-100">
                            </div>
                            <div class="carousel-cell">
                                <img src="assets/images/datailKos/detail6.png" alt="Detail" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-fasilitas">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12">
                        <h2>Fasilitas</h2>
                        <h3>Fasilitas Pribadi</h3>
                        <div class="fasilitas-icon">
                            <div><i class='bx bx-bed' ></i><span>Kasur</span></div>
                            <div><i class='bx bx-bath' ></i><span>Kamar Mandi Dalam</span></div>
                            <div><i class='bx bx-wifi' ></i><span>Internet</span></div>
                            <div><i class='bx bxs-washer'></i><span>Laundry</span></div>
                            <div><i class='bx bx-wind' ></i><span>Air Conditioner</span></div>
                            <div><i class='bx bx-cabinet'></i><span>Lemari</span></div>
                            <div><i class='bx bxs-dock-bottom'></i><span>Meja</span></div>
                            <div><i class='bx bx-chair' ></i><span>Kursi</span></div>
                        </div>
                        <h3>Fasilitas Bersama</h3>
                        <div class="fasilitas-icon">
                            <div><i class='bx bxs-parking' ></i><span>Lahan Parkir</span></div>
                            <div><i class='bx bx-fridge'></i><span>Dapur</span></div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-12">
                        <div class="ukuran-kamar">
                            <img src="assets/images/kamar.png" alt="Ukuran Kamar">
                            <span>Ukuran Kamar</span>
                            <div>3 x 4</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-lokasi">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h2>Lokasi Kos</h2>
                        <p>
                            Jl. Tj. Duren Utara 7/7 No.561, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7004517210116!2d106.7804403149724!3d-6.170848562190957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65a77df90f9%3A0x92f75fa57964d5ac!2sJl.%20Tj.%20Duren%20Utara%20VII%20No.7%2C%20RT.11%2FRW.3%2C%20Tj.%20Duren%20Utara%2C%20Kec.%20Grogol%20petamburan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011470!5e0!3m2!1sid!2sid!4v1652272862592!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-deskripsi">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12">
                        <h2>Keterangan Deskripsi Kos</h2>
                        <p>
                            Kost Eksklusif Putri New 5 Star Tanjung Duren dengan Konsep Luxury Minimalis di Jalan Tj Duren 7 Grogol Petamburan.
                            Kost yang sangat strategis dekat dengan: *Halte busway Grogol 1 *Kampus Untar *Kampus Ukrida *Mall Citraland *RS Tarumanegara *Mall Central Park *Mall Taman Anggrek *Stasiun Grogol *Toll Gate Grogol.
                            Kost ini sangat cocok untuk Eksekutif muda Karyawati dan Mahasiswi yang mencari hunian berkualitas dengan harga terjangkau. Kost Baru selesai dibangun September 2021.
                        </p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-12">
                        <div class="pemilik-kos">
                            <img src="assets/images/pemilikKos.jpg" alt="Pemilik Kos">
                            <div>
                                <h3>Bella</h3>
                                <span>0812-4686-8369</span>
                                <span>bella.aja@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-rekomendasi">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h2>Rekomendasi Kos Serupa</h2>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="kos-card">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-img">
                                        <img src="assets/images/kos.png" alt="Kos">
                                        <div class="blackdrop">
                                            <div class="kos-type">Campur</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-detail">
                                        <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                        <span>Tegal Parang, Jakarta Selatan</span>
                                        <div class="kos-icon">
                                            <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                        </div>
                                        <span class="kos-price">Rp. 2,750,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="kos-card">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-img">
                                        <img src="assets/images/kos.png" alt="Kos">
                                        <div class="blackdrop">
                                            <div class="kos-type">Campur</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 no-padding">
                                    <div class="kos-detail">
                                        <h3>Kost Mampang Residence 94 Mampang Prapatan</h3>
                                        <span>Tegal Parang, Jakarta Selatan</span>
                                        <div class="kos-icon">
                                            <i class='bx bx-bed' ></i><i class='bx bx-bath' ></i><i class='bx bxs-washer' ></i><i class='bx bx-wifi' ></i><span>6+</span>
                                        </div>
                                        <span class="kos-price">Rp. 2,750,000</span>
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