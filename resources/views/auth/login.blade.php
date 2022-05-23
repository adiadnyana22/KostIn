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
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
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
                <div class="login-card">
                    <div class="login-img">
                        <img src="{{ asset('assets/images/login.png') }}" alt="Login">
                    </div>
                    <div class="login-form">
                        <h1>Login</h1>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="email" name="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email ..." value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                            <input type="password" name="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password ..." value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                            <button>Sign In</button>
                        </form>
                        <div class="login-addition">
                            <span>Belum punya akun?</span>
                            <a href="{{ route('register') }}">Register</a>
                        </div>
                    </div>
                </div>
             </section>
        </div>
    </div>
</body>
</html>