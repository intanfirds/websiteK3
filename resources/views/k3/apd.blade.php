@extends('layouts.app')

@section('title', 'Peralatan Keselamatan Kerja - FamilyMart Indonesia')

@section('content')
<style>
    /* Styling tambahan agar layout lebih rapi */
    .card-img-top {
        height: 220px;
        object-fit: cover;
    }

    .card {
        border: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        height: 100%;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .text-family-green {
        color: #007b3c;
    }

    .btn-family-green {
        background-color: #007b3c;
        color: white;
    }

    .btn-family-green:hover {
        background-color: #009b4e;
        color: white;
    }

    hr {
        border-top: 2px solid #e0e0e0;
    }

    /* Grid selalu center kalau kurang dari 4 item */
    .centered-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
    }

    .centered-row .col {
        flex: 1 1 calc(25% - 1.5rem);
        max-width: calc(25% - 1.5rem);
        min-width: 240px;
    }

    @media (max-width: 992px) {
        .centered-row .col {
            flex: 1 1 calc(50% - 1.5rem);
            max-width: calc(50% - 1.5rem);
        }
    }

    @media (max-width: 576px) {
        .centered-row .col {
            flex: 1 1 100%;
            max-width: 100%;
        }
    }

    /* Hiasan judul bagian APD & Peralatan Darurat */
    .section-subtitle {
        position: relative;
        text-align: center;
        color: #007b3c;
        font-weight: 600;
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .section-subtitle::before,
    .section-subtitle::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 60px;
        height: 2px;
        background-color: #007b3c;
    }

    .section-subtitle::before {
        left: 0;
        transform: translateX(calc(50% - 80px));
    }

    .section-subtitle::after {
        right: 0;
        transform: translateX(calc(-50% + 80px));
    }

</style>

<!-- Hero Section -->
<section class="hero-section position-relative text-white py-5"
    style="background: url('{{ asset('images/apd/header-k3.jpg') }}') center/cover no-repeat;">
    <div class="overlay position-absolute w-100 h-100"
        style="background: linear-gradient(135deg, rgba(0, 123, 255, 0.75), rgba(40, 167, 69, 0.75)); top:0; left:0;">
    </div>
    <div class="container position-relative text-center">
        <h1 class="display-4 fw-bold">Peralatan Keselamatan Kerja</h1>
        <p class="lead">FamilyMart berkomitmen menjaga keselamatan dan kesehatan seluruh karyawan di setiap area kerja.</p>
    </div>
</section>

<!-- Content Section -->
<section class="section-padding bg-light py-5">
    <div class="container">

        {{-- ================= KITCHEN ================= --}}
        <div class="mb-5">
            <h2 class="fw-bold text-family-green mb-4 text-center">Area Kitchen / Dapur</h2>

            <h5 class="section-subtitle">Alat Pelindung Diri (APD)</h5>
            <div class="row g-4 mb-4 justify-content-center">
                @foreach ([
                    ['sarungtangan.jpg', 'Sarung Tangan Tahan Panas', 'Melindungi tangan dari suhu tinggi saat menggoreng atau memanggang.'],
                    ['clemekantipanas.png', 'Celemek Anti Air', 'Melindungi pakaian dari cipratan air dan bahan makanan.'],
                    ['masker.jpg', 'Masker', 'Mencegah paparan debu atau asap saat memasak.'],
                    ['hairnet.jpg', 'Hairnet', 'Menjaga kebersihan makanan dari rambut yang rontok.'],
                    ['sepatu_anti_slip.jpg', 'Sepatu Anti Slip', 'Mencegah terpeleset di area dapur yang basah atau licin.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h5 class="section-subtitle">Peralatan Darurat</h5>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['apar_k.jpg', 'APAR Kelas K', 'Untuk kebakaran akibat minyak atau lemak dapur.'],
                    ['fire_blanket.jpg', 'Fire Blanket', 'Selimut tahan api untuk memadamkan api kecil.'],
                    ['p3k.jpg', 'Kotak P3K', 'Berisi peralatan pertolongan pertama.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <hr class="my-5">

        {{-- ================= KASIR ================= --}}
        <div class="mb-5">
            <h2 class="fw-bold text-family-green mb-4 text-center">Area Kasir</h2>

            <h5 class="section-subtitle">Alat Pelindung Diri (APD)</h5>
            <div class="row g-4 mb-4 justify-content-center">
                @foreach ([
                    ['seragam.jpg', 'Seragam Kerja', 'Menjaga kerapian dan identitas karyawan di area kasir.'],
                    ['sepatu_anti_slip.jpg', 'Sepatu Anti Slip', 'Melindungi kaki dari risiko terpeleset di area kasir.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h5 class="section-subtitle">Peralatan Darurat</h5>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['panic_button.jpg', 'Panic Button', 'Untuk keadaan darurat seperti perampokan atau ancaman.'],
                    ['apar_k.jpg', 'APAR Jenis CO₂', 'Untuk kebakaran akibat korsleting listrik.'],
                    ['p3k.jpg', 'Kotak P3K', 'Tersedia di dekat kasir untuk pertolongan pertama.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <hr class="my-5">

        {{-- ================= GUDANG ================= --}}
        <div class="mb-5">
            <h2 class="fw-bold text-family-green mb-4 text-center">Area Gudang</h2>

            <h5 class="section-subtitle">Alat Pelindung Diri (APD)</h5>
            <div class="row g-4 mb-4 justify-content-center">
                @foreach ([
                    ['sepatu_anti_slip.jpg', 'Safety Shoes', 'Melindungi kaki dari benda jatuh atau tajam.'],
                    ['sarungtangan_kerja.jpg', 'Sarung Tangan Kerja', 'Mencegah luka saat mengangkat barang.'],
                    ['masker_debu.jpg', 'Masker Debu', 'Melindungi pernapasan dari debu di gudang.'],
                    ['helm.jpg', 'Helm Pengaman', 'Melindungi kepala saat bekerja di area rak tinggi.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h5 class="section-subtitle">Peralatan Darurat</h5>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['apar_k.jpg', 'APAR Jenis ABC', 'Untuk kebakaran bahan padat, cair, dan listrik.'],
                    ['p3k.jpg', 'Kotak P3K', 'Selalu tersedia di area gudang.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <hr class="my-5">

        {{-- ================= CLEANING SERVICE ================= --}}
        <div class="mb-5">
            <h2 class="fw-bold text-family-green mb-4 text-center">Area Cleaning Service</h2>

            <h5 class="section-subtitle">Alat Pelindung Diri (APD)</h5>
            <div class="row g-4 mb-4 justify-content-center">
                @foreach ([
                    ['sarungtangan_karet.jpg', 'Sarung Tangan Karet', 'Melindungi tangan dari bahan kimia pembersih.'],
                    ['masker.jpg', 'Masker', 'Mencegah hirupan debu atau bahan kimia.'],
                    ['clemekantipanas.png', 'Apron Plastik', 'Melindungi pakaian dari air dan bahan pembersih.'],
                    ['sepatu_anti_slip.jpg', 'Sepatu Anti Slip', 'Mencegah terpeleset di area basah.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h5 class="section-subtitle">Peralatan Darurat</h5>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['p3k.jpg', 'Kotak P3K', 'Untuk pertolongan pertama saat terjadi luka atau iritasi.'],
                    ['lantaibasah.jpg', 'Tanda Peringatan Lantai Basah', 'Memberi peringatan agar berhati-hati di area yang sedang dibersihkan.']
                ] as [$img, $title, $desc])
                    <div class="col-md-3 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/apd/' . $img) }}" class="card-img-top" alt="{{ $title }}">
                            <div class="card-body text-center">
                                <h6 class="fw-bold">{{ $title }}</h6>
                                <p class="small text-muted">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
