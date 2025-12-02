@extends('layouts.app')

@section('title', 'Family Mart Indonesia - Beranda')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Keselamatan dan Kesehatan Kerja Prioritas Kami</h1>
                    <p class="lead mb-4">Family Mart berkomitmen menciptakan lingkungan kerja yang aman, sehat, dan nyaman bagi seluruh karyawan dan pelanggan dengan standar tertinggi.</p>
                    <style>
                        .btn-light {
                        background: transparent;
                        color: white;
                        border: 1px solid white;
                        }
                        .btn-light:hover {
                        background: white;
                        color: black;
                        }
                    </style>
                    <a href="{{ route('k3') }}" class="btn btn-light btn-lg me-3">Pelajari K3 Kami</a>
                    <a href="{{ route('about') }}" class="btn btn-light btn-lg me-3">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding bg-family-light-blue">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                    <div class="stat-number">1000+</div>
                    <p class="text-family-blue fw-semibold">Toko di Seluruh Indonesia</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number">1600+</div>
                    <p class="text-family-blue fw-semibold">Karyawan Terlatih K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number">99.8%</div>
                    <p class="text-family-blue fw-semibold">Kepatuhan Standar K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number">50+</div>
                    <p class="text-family-blue fw-semibold">Penghargaan K3 Nasional</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Summary -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Tentang Family Mart Indonesia</h2>
                    <p class="text-muted">Sejak hadir di Indonesia pada tahun 2004, Family Mart telah tumbuh menjadi jaringan convenience store terdepan dengan komitmen kuat terhadap Keselamatan dan Kesehatan Kerja (K3).</p>
                    <p class="text-muted">Kami percaya bahwa lingkungan kerja yang aman dan sehat adalah fondasi untuk memberikan pelayanan terbaik kepada pelanggan.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Standar K3 Internasional</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Pelatihan K3 Berkelanjutan</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Audit K3 Rutin</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Program Kesehatan Karyawan</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-family-green mt-3">Selengkapnya</a>
                </div>
               <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/foto.png') }}" alt="Family Mart Store" class="img-fluid rounded shadow-lg w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Program K3 Section -->
    <section class="section-padding bg-family-light-green">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Program K3 Family Mart</h2>
                    <p class="text-muted">Pelajari berbagai program K3 kami yang diterapkan di seluruh gerai</p>
                </div>
            </div>

            <div class="row">
                @php
                    $programs = [
                        ['title' => 'Pendahuluan & Sejarah K3', 'icon' => 'fas fa-book', 'route' => 'k3.pendahuluan'],
                        ['title' => 'Landasan Hukum K3', 'icon' => 'fas fa-gavel', 'route' => 'k3.landasan'],
                        ['title' => 'Lingkungan Kerja Fisik', 'icon' => 'fas fa-industry', 'route' => 'k3.lingkungan'],
                        ['title' => 'Keselamatan Kerja', 'icon' => 'fas fa-hard-hat', 'route' => 'k3.keselamatan'],
                        ['title' => 'Alat Pelindung Diri (APD)', 'icon' => 'fas fa-shield-alt', 'route' => 'k3.apd'],
                        ['title' => 'Pertolongan Pertama Pada Kecelakaan Kerja (P3K)', 'icon' => 'fas fa-hand-paper', 'route' => 'k3.pertolongan'],
                        ['title' => 'Struktur Organisasi', 'icon' => 'fas fa-sitemap', 'route' => 'k3.organisasi'],
                        ['title' => 'Manajemen Risiko', 'icon' => 'fas fa-exclamation-triangle', 'route' => 'k3.risiko'],
                        ['title' => 'Audit K3', 'icon' => 'fas fa-clipboard-check', 'route' => 'k3.audit'],
                    ];
                @endphp

                @foreach($programs as $program)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <a href="{{ route($program['route']) }}" class="text-decoration-none">
                            <div class="card k3-card h-100 text-center">
                                <div class="card-body p-4">
                                    <div class="icon-wrapper mb-3">
                                        <i class="{{ $program['icon'] }} fa-2x text-family-green"></i>
                                    </div>
                                    <h5 class="card-title text-family-blue">{{ $program['title'] }}</h5>
                                    <p class="card-text text-muted">Klik untuk membaca detail</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
