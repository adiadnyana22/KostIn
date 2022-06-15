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
                        <!-- Without Login -->
                        <!-- <div class="btn-header">
                            <a href="#">Masuk</a>
                        </div> -->
                        <!-- With Login -->
                        <div class="btn-akun">
                            <a href="#"><i class='bx bxs-user-circle'></i></a>
                        </div>
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
                                <div class="layer-title-inside">
                                    <div class="back">
                                        <a href="#"><i class='bx bx-arrow-back'></i></a>
                                    </div>
                                    <h1>Tambah Kos</h1>
                                </div>
                                <div class="layer-form">
                                    <form action="{{ route('kostOwner/tambahKost') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-nama">Nama Kos</label>
                                                <input type="text" placeholder="Nama Kos ..." id="form-nama" name="kostName">
                                                @if ($errors->has('kostName'))
                                                <p class="text-danger">{{ $errors->first('kostName') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-jenis">Jenis Kos</label>
                                                <select name="kostTipe" id="form-jenis" required>
                                                    <option value="Campur">Campur</option>
                                                    <option value="Putra">Putra</option>
                                                    <option value="Putri">Putri</option>
                                                </select>
                                                @if ($errors->has('kostTipe'))
                                                <p class="text-danger">{{ $errors->first('kostTipe') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-nama">Jumlah Kamar</label>
                                                <input type="number" placeholder="Jumlah Kamar ..." id="form-nama" name="kostJumlahKamar" min="1" required>
                                                @if ($errors->has('kostJumlahKamar'))
                                                <p class="text-danger">{{ $errors->first('kostJumlahKamar') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-nama">Jumlah Penghuni</label>
                                                <input type="number" placeholder="Jumlah Penghuni ... " id="form-nama" name="kostJumlahPenghuni" required>
                                                @if ($errors->has('kostJumlahPenghuni'))
                                                <p class="text-danger">{{ $errors->first('kostJumlahPenghuni') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="kostPrice">Harga Kos Bulanan</label>
                                                <input type="number" placeholder="Harga Kos Bulanan ... (Rp)" id="form-harga" name="kostPrice" required> 
                                                @if ($errors->has('kostPrice'))
                                                <p class="text-danger">{{ $errors->first('kostPrice') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-cover">Foto Cover Kos</label>
                                                <input type="file" id="form-cover" name="kostPhoto" required accept="image/*,.pdf">
                                                @if ($errors->has('kostPhoto'))
                                                <p class="text-danger">{{ $errors->first('kostPhoto') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <h3>Fasilitas</h3>
                                                <div class="fasilitas-container">
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-kasur" name="kostFacilities[]" value="1">
                                                        <label for="check-kasur"><i class='bx bx-bed' ></i><span>Kasur</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-km-dalam" name="kostFacilities[]" value="2">
                                                        <label for="check-km-dalam"><i class='bx bx-bath' ></i><span>KM Dalam</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-km-luar" name="kostFacilities[]" value="3">
                                                        <label for="check-km-luar"><i class='bx bx-bath' ></i><span>KM Luar</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-internet" name="kostFacilities[]" value="4">
                                                        <label for="check-internet"><i class='bx bx-wifi' ></i><span>Internet</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-laundry" name="kostFacilities[]" value="5">
                                                        <label for="check-laundry"><i class='bx bxs-washer'></i><span>Laundry</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-ac" name="kostFacilities[]" value="6">
                                                        <label for="check-ac"><i class='bx bx-wind' ></i><span>AC</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-lemari" name="kostFacilities[]" value="7">
                                                        <label for="check-lemari"><i class='bx bx-cabinet'></i><span>Lemari</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-meja" name="kostFacilities[]" value="8">
                                                        <label for="check-meja"><i class='bx bxs-dock-bottom'></i><span>Meja</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-kursi" name="kostFacilities[]" value="9">
                                                        <label for="check-kursi"><i class='bx bx-chair' ></i><span>Kursi</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-parkir" name="kostFacilities[]" value="10">
                                                        <label for="check-parkir"><i class='bx bxs-parking' ></i><span>Lahan Parkir</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-dapur" name="kostFacilities[]" value="11">
                                                        <label for="check-dapur"><i class='bx bx-fridge'></i><span>Dapur</span></label>
                                                    </div>
                                                    <div class="checkbox-card">
                                                        <input type="checkbox" id="check-listrik" name="kostFacilities[]" value="12">
                                                        <label for="check-listrik"><i class='bx bxs-bolt-circle'></i><span>Listrik</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <label for="form-detail-kos">Detail Kos</label>
                                                <textarea name="kostDescription" id="form-detail-kos" placeholder="Detail Kos ..." required></textarea>
                                                @if ($errors->has('kostDescription'))
                                                <p class="text-danger">{{ $errors->first('kostDescription') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <h2>Address Data</h2>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kecamatan">Kecamatan</label>
                                                <input type="text" placeholder="Kecamatan ..." id="kostKecamatan" name="kostKecamatan" required>
                                                @if ($errors->has('kostKecamatan'))
                                                <p class="text-danger">{{ $errors->first('kostKecamatan') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kota">Kota</label>
                                                <input type="text" placeholder="Kota ..." id="kostKota" name="kostKabupaten" required>
                                                @if ($errors->has('kostKabupaten'))
                                                <p class="text-danger">{{ $errors->first('kostKabupaten') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-provinsi">Provinsi</label>
                                                <select name="kostProvinsi" id="form-provinsi" required>
                                                    @foreach ($provinsi as $provinsis)
                                                        <option value="{{ $provinsis->id }}">{{ $provinsis->name }} </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('kostProvinsi'))
                                                <p class="text-danger">{{ $errors->first('kostProvinsi') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 no-padding">
                                                <label for="form-kode-pos">Kode Pos</label>
                                                <input type="number" placeholder="Kode Pos ..." id="form-kode-pos" name="kostKodePos" required>
                                                @if ($errors->has('kostKodePos'))
                                                <p class="text-danger">{{ $errors->first('kostKodePos') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <label for="form-detail-alamat">Detail Alamat</label>
                                                <textarea name="kostDetailAlamat" id="form-detail-alamat" placeholder="Detail Alamat ..." required></textarea>
                                                @if ($errors->has('kostDetailAlamat'))
                                                <p class="text-danger">{{ $errors->first('kostDetailAlamat') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 no-padding">
                                                <div class="form-button">
                                                    <button>Tambah Kos</button>
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
</body>
</html>