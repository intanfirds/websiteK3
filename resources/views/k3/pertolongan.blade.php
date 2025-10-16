@extends('layouts.app')

@section('title', 'Pertolongan Pertama pada Kecelakaan (P3K) - Family Mart Indonesia')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative text-white py-5" 
    style="background: url('https://images.unsplash.com/photo-1603398938378-e54eab4466e1?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
    <div class="overlay position-absolute w-100 h-100"
        style="background: linear-gradient(135deg, rgba(0,123,255,0.85), rgba(25,135,84,0.85)); top:0; left:0;">
    </div>
    <div class="container position-relative text-center">
        <h1 class="display-4 fw-bold">Pertolongan Pertama pada Kecelakaan</h1>
        <p class="lead">Panduan tindakan cepat dan tepat di berbagai area kerja FamilyMart</p>
    </div>
</section>

<!-- Content Section -->
<section class="section-padding bg-light">
    <div class="container">

        @php
            $areas = [
                // ==================== DAPUR ====================
                [
                    'title' => 'Kitchen / Dapur',
                    'color' => 'success',
                    'injuries' => [
                        [
                            'type' => 'Luka Bakar',
                            'icon' => 'fa-fire',
                            'first_aid' => [
                                'Aliri air suhu kamar selama 10–20 menit.',
                                'Tutup dengan balutan kasa steril, jangan oles odol/minyak.',
                            ],
                            'follow_up' => [
                                'Berikan salep luka bakar ringan sesuai anjuran medis.',
                                'Periksa tanda infeksi (bengkak, nanah, nyeri) dalam 24 jam.',
                                'Jika luka berat atau nyeri hebat, segera rujuk ke fasilitas medis.',
                            ],
                            'prevention' => [
                                'Gunakan sarung tangan tahan panas.',
                                'Hindari menuang minyak panas terlalu penuh.',
                                'Jauhkan bahan mudah terbakar dari sumber api.',
                            ],
                        ],
                        [
                            'type' => 'Luka Sayat',
                            'icon' => 'fa-bandage',
                            'first_aid' => [
                                'Tekan dengan kasa steril hingga perdarahan berhenti.',
                                'Bersihkan luka dengan antiseptik dan balut rapi.',
                            ],
                            'follow_up' => [
                                'Jika luka dalam atau perdarahan tidak berhenti, periksa ke klinik.',
                                'Ganti perban setiap hari untuk mencegah infeksi.',
                            ],
                            'prevention' => [
                                'Gunakan pisau tajam dengan hati-hati.',
                                'Simpan alat tajam di tempat aman.',
                            ],
                        ],
                        [
                            'type' => 'Tersedak',
                            'icon' => 'fa-lungs',
                            'first_aid' => [
                                'Lakukan manuver Heimlich sampai benda keluar.',
                                'Pastikan korban dapat bernapas normal kembali.',
                            ],
                            'follow_up' => [
                                'Jika korban tidak sadar, lakukan RJP dan hubungi medis.',
                                'Periksa ke dokter untuk memastikan tidak ada luka tenggorokan.',
                            ],
                            'prevention' => [
                                'Hindari berbicara atau tertawa saat makan/minum.',
                            ],
                        ],
                    ],
                ],

                // ==================== KASIR ====================
                [
                    'title' => 'Kasir & Pelayanan',
                    'color' => 'primary',
                    'injuries' => [
                        [
                            'type' => 'Keseleo / Terkilir',
                            'icon' => 'fa-walking',
                            'first_aid' => [
                                'Gunakan prinsip R.I.C.E (Rest, Ice, Compression, Elevation).',
                            ],
                            'follow_up' => [
                                'Gunakan perban elastis jika perlu.',
                                'Jika nyeri tidak berkurang dalam 24 jam, segera periksa ke medis.',
                            ],
                            'prevention' => [
                                'Gunakan alas kaki ergonomis dan berdiri dengan postur benar.',
                                'Lakukan peregangan tiap 2 jam.',
                            ],
                        ],
                        [
                            'type' => 'Pingsan / Lemas',
                            'icon' => 'fa-user-injured',
                            'first_aid' => [
                                'Baringkan korban, angkat kaki ±20–30 cm, longgarkan pakaian.',
                            ],
                            'follow_up' => [
                                'Jika tidak sadar >1 menit, segera hubungi medis.',
                                'Periksa tekanan darah dan kadar gula.',
                            ],
                            'prevention' => [
                                'Pastikan ventilasi ruangan baik dan waktu istirahat cukup.',
                            ],
                        ],
                        [
                            'type' => 'Luka Sayat Kecil',
                            'icon' => 'fa-hand-holding-medical',
                            'first_aid' => [
                                'Cuci luka dengan air bersih dan antiseptik.',
                                'Tutup dengan plester atau kasa steril.',
                            ],
                            'follow_up' => [
                                'Jika luka tidak sembuh >2 hari, periksa ke petugas P3K.',
                            ],
                            'prevention' => [
                                'Gunakan alat bantu pembuka kardus (cutter) dengan hati-hati.',
                            ],
                        ],
                    ],
                ],

                // ==================== GUDANG ====================
                [
                    'title' => 'Gudang',
                    'color' => 'warning',
                    'injuries' => [
                        [
                            'type' => 'Patah Tulang',
                            'icon' => 'fa-bone',
                            'first_aid' => [
                                'Imobilisasi area cedera dengan bidai.',
                                'Jangan diluruskan paksa.',
                            ],
                            'follow_up' => [
                                'Segera hubungi medis dan hindari pergerakan.',
                                'Pantau sirkulasi darah di bawah area patah.',
                            ],
                            'prevention' => [
                                'Gunakan alat bantu angkat (hand pallet, troli).',
                                'Gunakan sepatu safety dan helm pengaman.',
                            ],
                        ],
                        [
                            'type' => 'Nyeri Punggung / Terkilir',
                            'icon' => 'fa-dumbbell',
                            'first_aid' => [
                                'Istirahat dan kompres dingin pada area nyeri.',
                            ],
                            'follow_up' => [
                                'Jika nyeri >2 hari, lakukan pemeriksaan radiologi.',
                            ],
                            'prevention' => [
                                'Angkat beban dengan lutut, bukan pinggang.',
                            ],
                        ],
                        [
                            'type' => 'Benturan Kepala',
                            'icon' => 'fa-head-side-virus',
                            'first_aid' => [
                                'Kompres dingin pada area benturan.',
                                'Amati kesadaran korban.',
                            ],
                            'follow_up' => [
                                'Jika muntah atau pingsan, segera rujuk medis.',
                            ],
                            'prevention' => [
                                'Gunakan helm pelindung di area berisiko.',
                            ],
                        ],
                    ],
                ],

                // ==================== CLEANING SERVICE ====================
                [
                    'title' => 'Cleaning Service',
                    'color' => 'danger',
                    'injuries' => [
                        [
                            'type' => 'Iritasi Kimia',
                            'icon' => 'fa-flask',
                            'first_aid' => [
                                'Bilas dengan air mengalir 15–20 menit.',
                            ],
                            'follow_up' => [
                                'Jika kulit memerah atau melepuh, rujuk medis.',
                                'Catat bahan kimia penyebab untuk laporan medis.',
                            ],
                            'prevention' => [
                                'Gunakan sarung tangan dan kacamata pelindung.',
                            ],
                        ],
                        [
                            'type' => 'Keracunan Uap Bahan Kimia',
                            'icon' => 'fa-wind',
                            'first_aid' => [
                                'Pindahkan korban ke udara segar.',
                                'Longgarkan pakaian.',
                            ],
                            'follow_up' => [
                                'Pantau napas dan kesadaran.',
                                'Siapkan RJP bila korban tidak bernapas.',
                            ],
                            'prevention' => [
                                'Gunakan masker pelindung dan hindari area tertutup.',
                            ],
                        ],
                        [
                            'type' => 'Luka Tusuk / Sayat',
                            'icon' => 'fa-syringe',
                            'first_aid' => [
                                'Jangan cabut benda jika masih menancap.',
                                'Balut area sekitar luka.',
                            ],
                            'follow_up' => [
                                'Pantau tanda infeksi dan pastikan imunisasi tetanus.',
                            ],
                            'prevention' => [
                                'Buang pecahan kaca di wadah khusus benda tajam.',
                            ],
                        ],
                    ],
                ],
            ];
        @endphp

        @foreach ($areas as $area)
        <div class="mb-5">
            <h3 class="fw-bold text-{{ $area['color'] }} mb-4 text-center">{{ $area['title'] }}</h3>
            <div class="row g-4">
                @foreach ($area['injuries'] as $injury)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm k3-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-wrapper mb-3">
                                <i class="fas {{ $injury['icon'] }} fa-2x text-{{ $area['color'] }}"></i>
                            </div>
                            <h5 class="fw-bold mb-2">{{ $injury['type'] }}</h5>

                            <h6 class="text-muted fw-semibold mb-2">Pertolongan Pertama:</h6>
                            <ul class="text-start small mb-3">
                                @foreach ($injury['first_aid'] as $step)
                                    <li>{{ $step }}</li>
                                @endforeach
                            </ul>

                            <h6 class="text-muted fw-semibold mb-2">Pertolongan Lanjutan:</h6>
                            <ul class="text-start small mb-3">
                                @foreach ($injury['follow_up'] as $next)
                                    <li>{{ $next }}</li>
                                @endforeach
                            </ul>

                            <h6 class="text-muted fw-semibold mb-2">Pencegahan:</h6>
                            <ul class="text-start small">
                                @foreach ($injury['prevention'] as $prevent)
                                    <li>{{ $prevent }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <!-- Tombol Kembali -->
        <div class="text-center mt-5">
            <a href="{{ route('k3') }}" class="btn btn-family-green px-4 py-2 shadow-lg">
                <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Utama K3
            </a>
        </div>
    </div>
</section>
@push('styles')
<style>
    /* Garis hias di kiri dan kanan judul area */
    .area-title {
        position: relative;
        text-align: center;
        color: #007b3c;
        font-weight: 700;
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .area-title::before,
    .area-title::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 60px;
        height: 2px;
        background-color: #007b3c;
    }

    .area-title::before {
        left: 50%;
        transform: translateX(-130%);
    }

    .area-title::after {
        right: 50%;
        transform: translateX(130%);
    }

    /* Tambahan biar tiap area punya jarak jelas */
    .k3-area-section {
        margin-bottom: 60px;
        padding-bottom: 30px;
        border-bottom: 2px solid #e0e0e0;
    }
</style>
@endpush
@endsection
