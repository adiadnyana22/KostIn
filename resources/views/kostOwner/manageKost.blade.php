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
                                    <li><a href="{{ route('kostOwner/dashboard') }}">Manage Kos</a></li>
                                    <li><a href="{{ route('kostOwner/manageKostRequest') }}">Manage User Request</a></li>
                                    @endif
                                    {{-- <li><a href="#">Manage Transaksi</a></li> --}}
                                    <li><a href="{{ route('kostOwner/updateAccount') }}">Manage Akun</a></li>
                                    @if (Auth::user()->roleID == 3)
                                    <li><a href="#" class="kos-owner">Jadi Kos Owner</a></li>
                                    @endif
                                    <li><form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="logout"><i class='bx bxs-user-circle'></i> Logout</a>
                                    </form></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                            <div class="akun-layer">
                                <div class="layer-title">
                                    <h1>Manage Kos</h1>
                                    <a href="{{ route('kostOwner/tambahKost') }}"><button>Tambah Kos</button></a>
                                </div>
                                <table id="datatables">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Kos</td>
                                            <td>Verified</td>
                                            <td>Full</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kost as $datas)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $datas->kostName }}</td>
                                            <td>
                                            @if ( $datas->kostApproved == 0)
                                                Not Verified
                                            @else
                                                Verifid
                                            @endif
                                            </td>
                                            <td>
                                                @if ( $datas->kostJumlahPenghuni < $datas->kostJumlahKamar )
                                                    <button class="false-btn">False</button>
                                                @else
                                                    <button class="true-btn">True</button>
                                                @endif
                                                </td>
                                            <td>
                                                <button class="default-btn">Detail</button>
                                                <a href="{{ route('kostOwner/editKost', $datas->kostID) }}"><button class="default-btn">Edit</button></a>
                                                <button class="default-btn">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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