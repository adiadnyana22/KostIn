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
    <link rel="stylesheet" href="{{ asset('assets/css/akun.css') }}">
    <!-- Extention Link -->
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> 
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
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
                        <!-- With Login -->
                        @if (Auth::user())
                        <div class="btn-akun">
                            <a href="#"><i class='bx bxs-user-circle'></i></a>
                        </div>
                        <!-- Without Login -->
                        @else
                        <div class="btn-header">
                            <a href="#">Masuk</a>
                        </div>
                        @endif
                    </nav>
                </div>
             </header>
             <section class="bg-banner">
                <div class="container">
                    <div class="row with-gap">
                        <div class="col-xl-3 col-lg-3 col-md-12 no-padding">
                            <div class="akun-nav">
                                @if (Auth::user())
                                <ul>
                                    @if (Auth::user()->roleID == 2)
                                    <li><a href="{{ route('kostOwner/manageKost') }}">Manage Kos</a></li>
                                    @endif
                                    {{-- <li><a href="#">Manage Transaksi</a></li> --}}
                                    <li><a href="{{ route('user/updateAccount') }}">Manage Akun</a></li>
                                    @if (Auth::user()->roleID == 3)
                                    <li><a href="#" class="kos-owner">Jadi Kos Owner</a></li>
                                    @endif
                                    <li><a href="#" class="logout"><i class='bx bxs-user-circle'></i> Logout</a></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                            <div class="akun-layer">
                                <div class="layer-title">
                                    <h1>Manage Akun</h1>
                                </div>
                                <div class="layer-form">
                                    <form action="{{ route('user/updateAccount') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <h2>Login Data</h2>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-email">Email</label>
                                                <input type="email" name="email" placeholder="Email ..." class="{{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Auth::user()->email }}" disabled id="form-email" name="form-email">
                                                @if ($errors->has('email'))
                                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-password">Password</label>
                                                <input type="password" name="password" placeholder="Password ..." class="{{ $errors->has('email') ? 'is-invalid' : '' }}" id="form-password" name="form-password">
                                                <div class="form-desc">
                                                    <span>Kosongkan jika tidak ingin mengganti password</span>
                                                </div>
                                                @if ($errors->has('password'))
                                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <h2>Personal Data</h2>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-name">Name</label>
                                                <input type="text" name="name" placeholder="Name ..." class="{{ $errors->has('name') ? 'is-invalid' : '' }}" value={{ Auth::user()->name }} id="form-name" name="form-name" required>
                                                @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-phone">Phone</label>
                                                <input type="text" name="phone" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ Auth::user()->phone }}" placeholder="Phone ..." id="form-phone" name="form-phone" required>
                                                @if ($errors->has('phone'))
                                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kecamatan">Kecamatan</label>
                                                <input type="text" name="kecamatan" class="{{ $errors->has('kecamatan') ? 'is-invalid' : '' }}" placeholder="Kecamatan ..." id="form-kecamatan" name="form-kecamatan" required>
                                                @if ($errors->has('kecamatan'))
                                                <p class="text-danger">{{ $errors->first('kecamatan') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kabupaten">Kabupaten</label>
                                                <input type="text" name="kabupaten" class="{{ $errors->has('kabupaten') ? 'is-invalid' : '' }}" placeholder="Kabupaten ..." id="form-kabupaten" name="form-kabupaten" required>
                                                @if ($errors->has('kabupaten'))
                                                <p class="text-danger">{{ $errors->first('kabupaten') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-provinsi">Provinsi</label>
                                                <input type="text" name="provinsi" class="{{ $errors->has('provinsi') ? 'is-invalid' : '' }}" placeholder="Provinsi ..." id="form-provinsi" name="form-provinsi" required>
                                                @if ($errors->has('provinsi'))
                                                <p class="text-danger">{{ $errors->first('provinsi') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kode-pos">Kode Pos</label>
                                                <input type="number" name="kodePos" class="{{ $errors->has('kodePos') ? 'is-invalid' : '' }}" placeholder="Kode Pos ..." id="form-kode-pos" name="form-kode-pos" required>
                                                @if ($errors->has('kodePos'))
                                                <p class="text-danger">{{ $errors->first('kodePos') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <label for="form-detail-alamat">Detail Alamat</label>
                                                <textarea name="detailAlamat" class="{{ $errors->has('detailAlamat') ? 'is-invalid' : '' }}" id="form-detail-alamat" placeholder="Detail Alamat ..." required></textarea>
                                                @if ($errors->has('detailAlamat'))
                                                <p class="text-danger">{{ $errors->first('detailAlamat') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <div class="form-button">
                                                    <button>Update Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable();
        });
    </script>
</body>
</html>