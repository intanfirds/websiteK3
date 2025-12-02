@extends('layouts.app')

@section('title', 'Struktur Organisasi K3 - Family Mart Indonesia')

@section('content')
    <!-- HERO SECTION -->
<section class="hero-section position-relative text-white py-5"
    style="background: url('https://images.unsplash.com/photo-1581091012184-5c3a4b8b744b?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
    <div class="overlay position-absolute w-100 h-100"
        style="background: linear-gradient(135deg, rgba(0,123,255,0.85), rgba(40,167,69,0.85)); top:0; left:0;">
    </div>
    <div class="container position-relative text-center">
        <h1 class="display-4 fw-bold">Struktur Organisasi K3 FamilyMart</h1>
            <p class="lead">Struktur K3 tingkat provinsi beserta peran dan tanggung jawabnya</p>
        </div>
    </div>
</section>

    <!-- Content Section -->
    <section class="section-padding bg-light py-5">
        <div class="container">

            <!-- Gambar Struktur Besar Tengah -->
            <div class="d-flex justify-content-center mb-5">
                <img src="{{ asset('images/organisasi.jpg') }}" 
                     alt="Struktur Organisasi K3" 
                     class="img-fluid shadow-lg rounded"
                     style="max-width: 1000px;">
            </div>
            <p class="text-center text-muted small mb-5">
                Struktur Organisasi K3 FamilyMart tingkat provinsi
            </p>

            <!-- Direktur Regional -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-family-blue mb-3">Direktur Regional</h3>
                    <p class="text-muted small">
                        Penanggung jawab utama seluruh kegiatan operasional dan penerapan Sistem Manajemen
                        Keselamatan dan Kesehatan Kerja (SMK3) di wilayah provinsi.
                    </p>
                    <ul class="text-muted small">
                        <li>Menetapkan kebijakan dan strategi pelaksanaan SMK3.</li>
                        <li>Menyetujui anggaran dan program K3 tahunan.</li>
                        <li>Mengawasi pencapaian kinerja K3 di seluruh cabang.</li>
                    </ul>
                </div>
            </div>

            <!-- Manajer K3 Provinsi -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-family-blue mb-3">Manajer K3 Provinsi</h3>
                    <p class="text-muted small">
                        Posisi strategis yang berada langsung di bawah Direktur Regional, mengkoordinasikan seluruh pelaksanaan K3 tingkat provinsi.
                    </p>
                    <h6 class="fw-bold text-family-green mt-3">Tugas Utama:</h6>
                    <ul class="text-muted small">
                        <li>Menyusun Rencana Induk K3 tingkat provinsi.</li>
                        <li>Melaksanakan audit dan inspeksi K3 lintas cabang.</li>
                        <li>Menyusun laporan triwulan kepada Direktorat Nasional dan Dinas Tenaga Kerja Provinsi.</li>
                        <li>Mengembangkan pelatihan keselamatan kerja & simulasi keadaan darurat.</li>
                    </ul>
                </div>
            </div>

            <!-- Tim K3 Provinsi -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-family-blue">Tim K3 FamilyMart Provinsi</h3>
                    <p class="text-muted small">
                        Tim ini berada di bawah koordinasi Manajer K3 Provinsi dan bertugas memastikan K3 terintegrasi di seluruh cabang.
                    </p>

                    <!-- Card Grid untuk Tim K3 -->
                    <div class="row g-3 mt-3 justify-content-center">

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <h6 class="fw-bold text-family-green">Koordinator Lapangan K3 Regional</h6>
                                <p class="text-muted small mb-0">
                                    Menghubungkan Tim K3 Provinsi dengan seluruh cabang. Mengatur inspeksi rutin, audit, dan pelatihan K3.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <h6 class="fw-bold text-family-green">Ahli K3 (Certified Safety Officer)</h6>
                                <p class="text-muted small mb-0">
                                    Melakukan identifikasi bahaya, penilaian risiko, pengendalian risiko, serta memastikan penggunaan APD dan sistem kerja aman.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <h6 class="fw-bold text-family-green">Dokter / Perawat Kerja Provinsi</h6>
                                <p class="text-muted small mb-0">
                                    Melakukan pemeriksaan kesehatan berkala, menangani P3K, dan memantau kondisi kesehatan lingkungan kerja.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <h6 class="fw-bold text-family-green">Petugas K3 Cabang</h6>
                                <p class="text-muted small mb-0">
                                    Perwakilan tiap cabang untuk melaporkan kondisi & insiden K3 kepada Tim Provinsi.
                                </p>
                            </div>
                        </div>

                        <!-- Kolom terakhir tengah -->
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                            <div class="p-3 bg-white rounded shadow-sm h-100">
                                <h6 class="fw-bold text-family-green">Perwakilan Pekerja</h6>
                                <p class="text-muted small mb-0">
                                    Wakil karyawan yang terlibat dalam rapat K3, audit, dan investigasi kecelakaan.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Hubungan K3 dengan Divisi Lain -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-family-blue">Integrasi K3 dengan Divisi Lain</h3>

                    <div class="row g-3 mt-3 justify-content-center">

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white shadow-sm rounded h-100">
                                <h6 class="fw-bold text-family-green">Operasional</h6>
                                <p class="text-muted small mb-0">
                                    Implementasi SOP aman di seluruh cabang FamilyMart.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white shadow-sm rounded h-100">
                                <h6 class="fw-bold text-family-green">HRD</h6>
                                <p class="text-muted small mb-0">
                                    Pelatihan K3, data absensi, dan pencatatan kecelakaan kerja.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white shadow-sm rounded h-100">
                                <h6 class="fw-bold text-family-green">Keuangan</h6>
                                <p class="text-muted small mb-0">
                                    Pengelolaan anggaran K3, pembelian APD, dan fasilitas penunjang.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 bg-white shadow-sm rounded h-100">
                                <h6 class="fw-bold text-family-green">Logistik</h6>
                                <p class="text-muted small mb-0">
                                    Standar K3 pada transportasi dan penyimpanan barang di gudang.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                            <div class="p-3 bg-white shadow-sm rounded h-100">
                                <h6 class="fw-bold text-family-green">Pengadaan</h6>
                                <p class="text-muted small mb-0">
                                    Pemilihan peralatan dan perlengkapan yang sesuai standar keselamatan.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ url('/k3#program-k3') }}" class="btn btn-family-green px-4 py-2 shadow-lg">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Program K3
                </a>
            </div>

        </div>
    </section>
@endsection
