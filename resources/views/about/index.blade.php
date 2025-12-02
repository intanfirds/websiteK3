@extends('layouts.app')

@section('title', 'Tentang Kami - Family Mart Indonesia')

@section('content')
    <!-- Page Header -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Tentang Family Mart Indonesia</h1>
                    <p class="lead">Lebih dari sekadar convenience store, kami adalah keluarga</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Profil Perusahaan</h2>
                    <p class="text-muted">
                        Family Mart hadir di Indonesia sejak tahun 2004 dengan komitmen untuk menyediakan produk berkualitas 
                        dan pelayanan terbaik bagi keluarga Indonesia. Dengan lebih dari 1.000 gerai di seluruh negeri, 
                        kami terus berinovasi agar setiap pelanggan dapat menikmati pengalaman berbelanja yang nyaman dan menyenangkan.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Pelayanan ramah dan cepat</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Produk segar dan berkualitas</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Inovasi berkelanjutan untuk kepuasan pelanggan</li>
                        <li><i class="fas fa-check-circle text-family-green me-2"></i>Kenyamanan bagi seluruh keluarga Indonesia</li>
                    </ul>
                </div>
                 <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/foto.png') }}" alt="Family Mart Store" class="img-fluid rounded shadow-lg w-100">
                </div>
            </div>
        </div>
    </section>

   <!-- Kebijakan & Rencana & Program Pelatihan -->
<section class="section-padding bg-family-light-blue">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title gradient-text">Kebijakan, Rencana & Program K3</h2>
                <p class="text-muted">Komitmen Family Mart terhadap keselamatan dan kesehatan kerja</p>
            </div>
        </div>

        <div class="row">

            <!-- Kebijakan K3 -->
            <div class="col-lg-4 mb-4" data-aos="fade-right">
                <div class="card k3-card h-100 text-center">
                    <div class="card-body p-5">
                        <i class="fas fa-scroll fa-3x text-family-green mb-3"></i>
                        <h4 class="text-family-blue mb-3">Kebijakan K3</h4>

                        <p class="text-muted" style="text-align: justify;">
                            Manajemen Family Mart berkomitmen penuh untuk menciptakan lingkungan kerja yang aman,
                            sehat, serta bebas dari kecelakaan. Komitmen ini diwujudkan melalui penyediaan fasilitas,
                            pelatihan, dan sistem pengawasan K3 yang sesuai dengan peraturan perundang-undangan serta
                            standar industri ritel.
                        </p>

                      <ul class="text-start mx-auto" style="max-width: 380px; list-style: none; padding-left: 0;">
                        <li class="mb-2">
                            <i class="fas fa-check text-family-green me-2"></i>
                            Mematuhi seluruh peraturan perundang-undangan di bidang Keselamatan dan Kesehatan Kerja.
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-family-green me-2"></i>
                            Menyediakan fasilitas K3 yang memadai seperti APAR, kotak P3K, jalur evakuasi, dan alat pelindung diri (APD).
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-family-green me-2"></i>
                            Menjamin bahwa seluruh karyawan mendapatkan pelatihan K3 secara berkala.
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-family-green me-2"></i>
                            Mencegah terjadinya kecelakaan kerja dengan menerapkan standar operasional yang aman.
                        </li>
                        <li>
                            <i class="fas fa-check text-family-green me-2"></i>
                            Melakukan evaluasi dan peningkatan berkelanjutan terhadap penerapan Sistem Manajemen K3 di seluruh gerai.
                        </li>
                    </ul>
                    </div>
                </div>
            </div>

            <!-- Rencana K3 -->
            <div class="col-lg-4 mb-4" data-aos="fade-up">
                <div class="card k3-card h-100 text-center">
                    <div class="card-body p-5">
                        <i class="fas fa-bullseye fa-3x text-family-green mb-3"></i>
                        <h4 class="text-family-blue mb-3">Rencana K3</h4>

                        <p class="text-muted" style="text-align: justify;">
                            Rencana K3 disusun setiap tahun untuk memastikan pencapaian target keselamatan secara
                            terukur. Fokus utama adalah pencegahan kecelakaan, peningkatan kesiapsiagaan, serta
                            pemenuhan fasilitas K3 di seluruh gerai Family Mart.
                        </p>

                        <ul class="list-unstyled text-start mx-auto" style="max-width: 320px; text-align: justify;">
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Menurunkan tingkat kecelakaan kerja minimal 15% dibanding tahun sebelumnya.
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Mengadakan inspeksi dan audit K3 secara rutin di setiap gerai.
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Memastikan seluruh APAR, kotak P3K, dan jalur evakuasi berfungsi optimal.
                            </li>
                            <li><i class="fas fa-check text-family-green me-2"></i>
                                Memastikan seluruh karyawan mengikuti minimal dua pelatihan K3 setiap tahun.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Program Pelatihan K3 -->
            <div class="col-lg-4 mb-4" data-aos="fade-left">
                <div class="card k3-card h-100 text-center">
                    <div class="card-body p-5">
                        <i class="fas fa-graduation-cap fa-3x text-family-green mb-3"></i>
                        <h4 class="text-family-blue mb-3">Program Pelatihan K3</h4>

                        <p class="text-muted" style="text-align: justify;">
                            Program pelatihan K3 dilaksanakan secara berkala untuk memastikan seluruh karyawan mampu
                            menangani situasi darurat, memahami penggunaan alat keselamatan, dan bekerja sesuai prosedur.
                        </p>

                        <ul class="list-unstyled text-start mx-auto" style="max-width: 320px; text-align: justify;">
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Pelatihan penggunaan APAR (dasar & refreshment).
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Pelatihan P3K untuk setiap gerai (penanganan luka, pingsan, dan kegawatdaruratan ringan).
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Pelatihan Food Safety untuk kasir dan kitchen crew.
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>
                                Simulasi evakuasi kebakaran tahunan per wilayah.
                            </li>
                            <li><i class="fas fa-check text-family-green me-2"></i>
                                Dokumentasi pelatihan (absensi, foto, laporan kegiatan).
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Our Core Values -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Nilai-Nilai Utama</h2>
                    <p class="text-muted">Landasan dalam setiap pelayanan Family Mart</p>
                </div>
            </div>
            <div class="row">
                @php
                    $values = [
                        ['title' => 'Kualitas', 'icon' => 'fas fa-star', 'desc' => 'Memberikan produk terbaik bagi pelanggan.'],
                        ['title' => 'Inovasi', 'icon' => 'fas fa-lightbulb', 'desc' => 'Terus beradaptasi mengikuti kebutuhan zaman.'],
                        ['title' => 'Kenyamanan', 'icon' => 'fas fa-coffee', 'desc' => 'Menciptakan pengalaman berbelanja yang menyenangkan.'],
                        ['title' => 'Keselamatan', 'icon' => 'fas fa-hard-hat', 'desc' => 'Menjaga keselamatan kerja dan pelanggan di setiap gerai.'],
                    ];
                @endphp

                @foreach($values as $value)
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                        <div class="card k3-card h-100 text-center">
                            <div class="card-body p-4">
                                <div class="icon-wrapper mb-3">
                                    <i class="{{ $value['icon'] }} fa-2x text-family-green"></i>
                                </div>
                                <h5 class="card-title text-family-blue">{{ $value['title'] }}</h5>
                                <p class="card-text text-muted">{{ $value['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Tombol Kembali -->
            <div class="text-center mt-5">
                <a href="{{ route('k3') }}" class="btn btn-family-green px-4 py-2 shadow-lg">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Utama K3
                </a>
            </div>
        </div>
    </section>
@endsection
