@extends('layouts.app')

@section('title', 'Lingkungan Kerja Fisik - Family Mart Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5"
        style="background: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
        <div class="overlay position-absolute w-100 h-100"
            style="background: linear-gradient(135deg, rgba(0, 123, 255, 0.85), rgba(40, 167, 69, 0.85)); top:0; left:0;">
        </div>
        <div class="container position-relative text-center">
            <h1 class="display-4 fw-bold">Lingkungan Kerja Fisik</h1>
            <p class="lead">Menciptakan tempat kerja yang aman, nyaman, dan higienis di Family Mart</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <!-- Pengantar -->
                            <h2 class="mb-4 gradient-text">Lingkungan Kerja Fisik di Family Mart</h2>
                            <p class="text-muted">
                                Lingkungan kerja fisik adalah semua kondisi yang ada di sekitar karyawan yang dapat memengaruhi kenyamanan, 
                                kesehatan, dan produktivitas kerja. Family Mart sangat memperhatikan aspek ini demi terciptanya suasana kerja yang aman, higienis, dan kondusif.
                            </p>

                            <!-- Gambar Denah -->
                            <div class="text-center my-5">
                                <img src="{{ asset('images/lingkungankerja.jpg') }}" alt="Lingkungan Kerja Fisik" 
                                    class="img-fluid shadow-lg rounded">
                                <p class="text-muted mt-3">
                                    Denah lokasi fasilitas K3 di area kerja Family Mart, meliputi: 
                                    <strong>APAR</strong>, <strong>Titik Kumpul</strong>, dan <strong>Kotak P3K</strong>.
                                </p>
                            </div>

                            <!-- Poin-poin Lingkungan Kerja -->
                           <h4 class="mt-4 text-family-green">Faktor Lingkungan Kerja Fisik yang Dikelola di FamilyMart:</h4>
                            <ul class="text-muted small">
                                <li>
                                    <strong>Suhu & Ventilasi:</strong> 
                                    Pendingin ruangan (AC) dan ventilasi selalu dijaga agar area minimarket tetap sejuk. 
                                    Di ruang penyimpanan makanan beku maupun dapur pemanas makanan cepat saji, suhu dikontrol ketat 
                                    untuk menjaga kualitas produk sekaligus kenyamanan kerja staf.
                                </li>
                                <li>
                                    <strong>Pencahayaan:</strong> 
                                    Lampu LED hemat energi dipasang di area kasir, lorong rak, dapur, dan gudang agar 
                                    pencahayaan merata. Hal ini memudahkan pelanggan mencari produk dan membantu staf bekerja 
                                    dengan aman tanpa risiko area gelap.
                                </li>
                                <li>
                                    <strong>Kebersihan:</strong> 
                                    Pembersihan rutin dilakukan setiap shift, terutama di area kasir, rak minuman, meja makan 
                                    pelanggan, dapur pemanas, dan toilet. Prosedur ini mencegah kontaminasi makanan dan 
                                    menjaga kenyamanan pelanggan.
                                </li>
                                <li>
                                    <strong>Kebisingan:</strong> 
                                    Mesin pendingin dan peralatan dapur dirawat secara berkala agar tidak menimbulkan suara 
                                    berlebihan. Dengan begitu, kenyamanan pelanggan saat berbelanja tetap terjaga, 
                                    sekaligus memastikan staf bisa bekerja fokus.
                                </li>
                                <li>
                                    <strong>Tata Letak Peralatan:</strong> 
                                    Rak produk disusun dengan jalur yang cukup lebar untuk pelanggan, serta mesin pendingin 
                                    dan peralatan dapur ditempatkan strategis agar mudah diakses karyawan. Tata letak ini 
                                    mengurangi risiko kecelakaan seperti tersandung atau terbentur.
                                </li>
                                <li>
                                    <strong>Keamanan Listrik:</strong> 
                                    Stop kontak, kulkas, dan mesin kasir diperiksa secara rutin untuk mencegah korsleting. 
                                    Kabel dipasang rapi dengan pelindung sehingga tidak mengganggu pergerakan karyawan 
                                    maupun pelanggan.
                                </li>
                            </ul>


                            <!-- Kesimpulan -->
                            <p class="text-muted mt-4">
                                Dengan pengelolaan lingkungan kerja fisik yang baik, Family Mart memastikan para karyawan dapat bekerja dengan aman dan nyaman, 
                                serta pelanggan mendapatkan pengalaman belanja yang higienis dan menyenangkan.
                            </p>
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
