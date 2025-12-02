@extends('layouts.app')

@section('title', 'K3 & Keamanan - Family Mart Indonesia')

@section('content')
    <!-- Page Header -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Keselamatan & Kesehatan Kerja</h1>
                    <p class="lead">Komitmen kami dalam menciptakan lingkungan kerja yang aman dan sehat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- K3 Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Kebijakan K3 Family Mart</h2>
                    <p class="text-muted">Keselamatan dan Kesehatan Kerja (K3) merupakan bagian integral dari budaya perusahaan Family Mart.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Mencegah kecelakaan kerja</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Mematuhi semua peraturan K3</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Menyediakan sumber daya K3</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Melibatkan seluruh karyawan</li>
                        <li><i class="fas fa-check-circle text-family-green me-2"></i>Terus meningkatkan sistem K3</li>
                    </ul>
                </div>
                 <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/foto.png') }}" alt="Family Mart Store" class="img-fluid rounded shadow-lg w-100">
                </div>
            </div>
        </div>
    </section>

   <!-- K3 Programs -->
    <section id="program-k3" class="section-padding bg-family-light-blue">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Program K3</h2>
                    <p class="text-muted">Klik untuk melihat detail setiap program</p>
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
