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
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
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
                            <center>
                                <h1>KostIn</h1>
                                <strong>Cara Mudah Mencari Kos Yang Sesuai</strong>
                            </center>
                        </div>
                    </div>
                </div>
             </section>
        </div>
        <section class="bg-desc">
            <div class="container">
                <h2>Apa itu <span>KostIn</span></h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta cumque quis quo a voluptatum repellat quia. Omnis iste sunt at rerum officia culpa. Error eos nam repudiandae soluta officiis ullam hic, fugiat enim sunt. Nostrum, saepe dolorum. Aut, deserunt quibusdam facere pariatur iusto aperiam voluptates at? Neque minima sunt deserunt dolor sed aliquam nostrum culpa officiis sit repellendus quisquam eligendi deleniti odit iure ipsum tempora, labore voluptatum suscipit dolorum. Deleniti quisquam impedit facilis dolore debitis hic recusandae provident ab laudantium magnam placeat veritatis officia incidunt corrupti dolorum aperiam, quod praesentium vitae sequi quia nulla aliquid consequuntur? Similique, eos dolorem.
                </p>
            </div>
        </section>
        <section class="bg-faq">
            <div class="container">
                <h2>Frequently Asked <span>Questions</span></h2>
                <h3>Bagaimana cara mendaftar sebagai pemilik kos?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tenetur deserunt corporis. Voluptas sapiente cum molestias, laboriosam similique voluptatem. Id veniam quis soluta quidem explicabo reprehenderit vitae vero, temporibus quisquam, molestias ut. Culpa temporibus quidem recusandae quisquam corrupti laborum vero, ipsa debitis eveniet. Beatae, quod velit. Expedita voluptate iste quas repellat dolores debitis aliquam necessitatibus minima nam perferendis. Repellat officiis corporis pariatur voluptatibus qui tenetur veniam, ipsa vitae iste aliquid voluptas odit dolorem corrupti deserunt!
                </p>
                <h3>Apakah KostIn aman?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tenetur deserunt corporis. Voluptas sapiente cum molestias, laboriosam similique voluptatem. Id veniam quis soluta quidem explicabo reprehenderit vitae vero, temporibus quisquam, molestias ut. Culpa temporibus quidem recusandae quisquam corrupti laborum vero, ipsa debitis eveniet. Beatae, quod velit. Expedita voluptate iste quas repellat dolores debitis aliquam necessitatibus minima nam perferendis. Repellat officiis corporis pariatur voluptatibus qui tenetur veniam, ipsa vitae iste aliquid voluptas odit dolorem corrupti deserunt!
                </p>
                <h3>Bagaimana cara mendaftar sebagai pemilik kos?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tenetur deserunt corporis. Voluptas sapiente cum molestias, laboriosam similique voluptatem. Id veniam quis soluta quidem explicabo reprehenderit vitae vero, temporibus quisquam, molestias ut. Culpa temporibus quidem recusandae quisquam corrupti laborum vero, ipsa debitis eveniet. Beatae, quod velit. Expedita voluptate iste quas repellat dolores debitis aliquam necessitatibus minima nam perferendis. Repellat officiis corporis pariatur voluptatibus qui tenetur veniam, ipsa vitae iste aliquid voluptas odit dolorem corrupti deserunt!
                </p>
                <h3>Apakah KostIn aman?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tenetur deserunt corporis. Voluptas sapiente cum molestias, laboriosam similique voluptatem. Id veniam quis soluta quidem explicabo reprehenderit vitae vero, temporibus quisquam, molestias ut. Culpa temporibus quidem recusandae quisquam corrupti laborum vero, ipsa debitis eveniet. Beatae, quod velit. Expedita voluptate iste quas repellat dolores debitis aliquam necessitatibus minima nam perferendis. Repellat officiis corporis pariatur voluptatibus qui tenetur veniam, ipsa vitae iste aliquid voluptas odit dolorem corrupti deserunt!
                </p>
            </div>
        </section>
        <section class="bg-kontak">
            <div class="container">
                <h2>Kontak <span>Developer</span></h2>
                <div class="kontak-container">
                    <div class="kontak-card">
                        <h3>Made Adi Adnyana</h3>
                        <span>made.adnyana@binus.ac.id</span>
                        <span>081246868369</span>
                    </div>
                    <div class="kontak-card">
                        <h3>Made Adi Adnyana</h3>
                        <span>made.adnyana@binus.ac.id</span>
                        <span>081246868369</span>
                    </div>
                    <div class="kontak-card">
                        <h3>Made Adi Adnyana</h3>
                        <span>made.adnyana@binus.ac.id</span>
                        <span>081246868369</span>
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