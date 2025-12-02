@extends('layouts.app')

@section('title', 'Landasan Hukum K3 - Family Mart Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5" 
        style="background: url('https://images.unsplash.com/photo-1581090700227-4c4ef1a0c2df?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
        <div class="overlay position-absolute w-100 h-100" 
            style="background: linear-gradient(135deg, rgba(0, 123, 255, 0.85), rgba(40, 167, 69, 0.85)); top:0; left:0;">
        </div>
        <div class="container position-relative text-center">
            <h1 class="display-4 fw-bold">Landasan Hukum K3</h1>
            <p class="lead">Family Mart memastikan penerapan K3 sesuai dengan ketentuan hukum di Indonesia</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- UU No.1 Tahun 1970 -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-hard-hat fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">UU No. 1 Tahun 1970</h5>
                            </div>
                            <p class="text-muted small">
                                Undang-Undang ini merupakan dasar utama pelaksanaan K3 di Indonesia. 
                                Mengatur tentang syarat-syarat keselamatan kerja di semua tempat kerja: darat, laut, udara, maupun bawah tanah.
                            </p>
                            <ul class="text-muted small">
                                <li>Pengendalian faktor berbahaya: suhu, debu, api, asap, gas, radiasi, suara, dan getaran.</li>
                                <li>Penyediaan alat pelindung diri (APD) yang memadai.</li>
                                <li>Kewajiban pengusaha melakukan pelatihan K3.</li>
                                <li>Pemeriksaan kesehatan tenaga kerja secara berkala.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- UU No.13 Tahun 2003 -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-users fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">UU No. 13 Tahun 2003</h5>
                            </div>
                            <p class="text-muted small">
                                UU Ketenagakerjaan ini menekankan aspek perlindungan tenaga kerja. 
                                Salah satu fokus utamanya adalah pekerja perempuan yang bekerja pada malam hari.
                            </p>
                            <ul class="text-muted small">
                                <li>Pasal 76: Pekerja perempuan berhak mendapat makanan bergizi & fasilitas kesehatan.</li>
                                <li>Pengusaha wajib menyediakan transportasi antar-jemput demi keamanan.</li>
                                <li>Mencegah diskriminasi terhadap pekerja perempuan.</li>
                                <li>Mengatur waktu kerja agar tidak membahayakan kesehatan.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- UU No.23 Tahun 1992 -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-apple-alt fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">UU No. 23 Tahun 1992</h5>
                            </div>
                            <p class="text-muted small">
                                UU Kesehatan menegaskan bahwa makanan dan minuman harus aman untuk dikonsumsi. 
                            </p>
                            <ul class="text-muted small">
                                <li>Pasal 21: Setiap produk wajib mencantumkan label komposisi & tanggal kadaluarsa.</li>
                                <li>Dilarang memperjualbelikan makanan/minuman yang berbahaya.</li>
                                <li>Pengendalian higiene sanitasi di area penyimpanan & display makanan.</li>
                                <li>Pengawasan rutin oleh instansi terkait.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Permenaker No.5 Tahun 2018 -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-seedling fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">Permenaker No. 5 Tahun 2018</h5>
                            </div>
                            <p class="text-muted small">
                                Peraturan ini mengatur standar keselamatan dan kesehatan kerja di lingkungan kerja.
                            </p>
                            <ul class="text-muted small">
                                <li>Pasal 1 Poin 6: Lingkungan kerja harus dikendalikan agar tidak membahayakan tenaga kerja.</li>
                                <li>Penerapan higiene & sanitasi di area kerja.</li>
                                <li>Pengendalian faktor fisik, kimia, dan biologi di tempat kerja.</li>
                                <li>Monitoring kualitas udara, suhu, dan pencahayaan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Tombol Kembali -->
            <div class="text-center mt-5">
                <a href="{{ url('/k3#program-k3') }}" class="btn btn-family-green px-4 py-2 shadow-lg">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Program K3
                </a>
            </div>
        </div>
    </section>
@endsection
