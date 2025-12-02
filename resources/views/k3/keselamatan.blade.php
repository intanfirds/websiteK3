@extends('layouts.app')

@section('title', 'Keselamatan Kerja - Family Mart Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5"
        style="background: url('https://images.unsplash.com/photo-1581090700023-6c9a3c56a32f?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
        <div class="overlay position-absolute w-100 h-100"
            style="background: linear-gradient(135deg, rgba(0, 123, 255, 0.85), rgba(40, 167, 69, 0.85)); top:0; left:0;">
        </div>
        <div class="container position-relative text-center">
            <h1 class="display-4 fw-bold">Keselamatan Kerja</h1>
            <p class="lead">Faktor, sumber bahaya, dan cara pencegahan di Family Mart</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-4">

                <!-- Faktor-Faktor -->
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-industry fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">Faktor-Faktor yang Berpengaruh terhadap Keselamatan Kerja</h5>
                            </div>
                            <ul class="text-muted small">
                                <li><strong>Lingkungan Kerja:</strong> Area dapur bersih & teratur, lantai anti-slip, ventilasi cukup, suhu terkendali, pencahayaan memadai, area makan bebas hambatan.</li>
                                <li><strong>Peralatan Dapur:</strong> Kompor, oven, microwave, deep fryer, pisau & alat tajam harus digunakan & disimpan aman; freezer & kulkas dicek rutin; blender/mixer sesuai standar.</li>
                                <li><strong>Bahan Kerja:</strong> Bahan makanan disimpan benar, minyak panas hati-hati, bahan kimia pembersih digunakan sesuai standar & aman.</li>
                                <li><strong>Manusia:</strong> Pekerja patuhi SOP & gunakan APD, dilatih prosedur darurat; pengunjung juga faktor risiko bila area tidak aman.</li>
                                <li><strong>Sistem & Manajemen:</strong> Manajemen atur shift, pelatihan berkala, inspeksi rutin, pemeliharaan APAR, kotak P3K, serta penerapan SOP keselamatan konsisten.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sumber Bahaya -->
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-exclamation-triangle fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">Sumber-Sumber Bahaya</h5>
                            </div>
                            <ul class="text-muted small">
                                <li><strong>Bahaya Fisik:</strong> Suara bising mesin, pencahayaan kurang/berlebih, suhu ekstrem, radiasi microwave, uap panas, getaran blender/mixer.</li>
                                <li><strong>Bahaya Kimia:</strong> Uap deterjen & desinfektan, asap minyak goreng, zat toksik, korosif, mudah terbakar (LPG, alkohol, minyak).</li>
                                <li><strong>Bahaya Biologi:</strong> Kontaminasi bakteri (Salmonella, E. coli), jamur, hama (kecoa, lalat, tikus), cairan tubuh pekerja.</li>
                                <li><strong>Bahaya Ergonomi:</strong> Gerakan berulang, angkat beban berat, postur tidak alami, desain stasiun kerja buruk.</li>
                                <li><strong>Bahaya Psikososial:</strong> Stres kerja, kekerasan/perundungan, pelecehan, jam kerja tidak adil.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Cara Pencegahan -->
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-shield-alt fa-2x text-family-green me-3"></i>
                                <h5 class="fw-bold text-family-blue mb-0">Cara Pencegahan Kecelakaan Kerja</h5>
                            </div>
                            <ul class="text-muted small">
                                <li><strong>Di Area Dapur:</strong> Gunakan APD (sarung tangan, celemek, masker, sepatu anti-slip), bersihkan tumpahan segera, simpan pisau aman, cek suhu kulkas/freezer, pastikan ventilasi berfungsi, latih pekerja penggunaan alat panas.</li>
                                <li><strong>Di Area Pengunjung:</strong> Pasang tanda “Lantai Basah”, cek stabilitas kursi/meja, tata ruang aman, pencahayaan cukup.</li>
                                <li><strong>Sistem & Manajemen:</strong> Pelatihan rutin, SOP kebakaran & evakuasi, perawatan APAR, kotak P3K, pengaturan shift, inspeksi rutin.</li>
                                <li><strong>Pencegahan Tambahan:</strong> Terapkan 5S, tanda peringatan visual, pisahkan area panas & dingin, audit internal K3 berkala.</li>
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
