<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KostIn - Penyedia Kos Mahasiswa</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

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
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Area</a></li>
                                <li><a href="#">Kampus</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
                            <div class="btn-header">
                                <a href="#">Masuk</a>
                            </div>
                        </nav>
                    </div>
                 </header>

                @yield('content')
             
        </div>
    </body>
</html>
