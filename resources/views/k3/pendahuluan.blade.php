@extends('layouts.app')

@section('title', 'Pendahuluan & Sejarah K3 - Family Mart Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5" 
        style="background: url('https://images.unsplash.com/photo-1581093448799-15d3f68f12c7?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
        <div class="overlay position-absolute w-100 h-100" 
            style="background: linear-gradient(135deg, rgba(0, 123, 255, 0.85), rgba(40, 167, 69, 0.85)); top:0; left:0;">
        </div>
        <div class="container position-relative text-center">
            <h1 class="display-4 fw-bold">Pendahuluan & Sejarah K3</h1>
            <p class="lead">Membangun budaya kerja yang aman, sehat, dan berkelanjutan di Family Mart Indonesia</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <!-- Pendahuluan -->
                            <h2 class="mb-4 gradient-text">Pendahuluan</h2>
                            <p class="text-muted">
                                Keselamatan dan Kesehatan Kerja (K3) adalah aspek fundamental yang tidak dapat dipisahkan dari setiap aktivitas perusahaan modern. 
                                K3 bukan sekadar kewajiban hukum, tetapi juga merupakan strategi penting untuk menjaga keberlanjutan usaha, melindungi karyawan, serta memastikan pelayanan terbaik bagi pelanggan.
                            </p>
                            <p class="text-muted">
                                Di lingkungan ritel seperti Family Mart, penerapan K3 memiliki arti penting karena aktivitas kerja melibatkan interaksi langsung dengan pelanggan, penanganan produk makanan dan minuman, serta penggunaan peralatan operasional. 
                                Dengan manajemen K3 yang baik, perusahaan mampu:
                            </p>
                            <ul class="text-muted small">
                                <li>Mencegah kecelakaan kerja dan penyakit akibat kerja.</li>
                                <li>Menciptakan lingkungan kerja yang aman, nyaman, dan produktif.</li>
                                <li>Meningkatkan kepuasan, loyalitas, dan motivasi karyawan.</li>
                                <li>Memastikan kualitas pelayanan serta keamanan produk bagi pelanggan.</li>
                                <li>Mendukung keberlanjutan bisnis dan tanggung jawab sosial perusahaan.</li>
                            </ul>

                            <!-- Sejarah -->
                            <h2 class="mt-5 mb-4 gradient-text">Sejarah K3 di Family Mart</h2>
                            <p class="text-muted">
                                Sejak hadir di Indonesia pada tahun 2012, Family Mart berkomitmen menjadikan 
                                Keselamatan dan Kesehatan Kerja (K3) sebagai bagian dari budaya kerja untuk 
                                melindungi karyawan dan pelanggan.
                            </p>
                            <ul class="text-muted small">
                                <li>
                                    <strong>Fase Awal:</strong> Penerapan pelatihan dasar keselamatan kerja dan penyediaan 
                                    alat pelindung diri (APD) di area dapur, gudang, dan kasir.
                                </li>
                                <li>
                                    <strong>Fase Penguatan:</strong> Pembentukan SOP kebersihan, penanganan darurat, 
                                    serta pengendalian kebakaran di setiap gerai.
                                </li>
                                <li>
                                    <strong>Fase Modernisasi:</strong> Integrasi manajemen K3 dengan standar internasional 
                                    melalui audit rutin dan pelatihan berkala bagi seluruh karyawan.
                                </li>
                                <li>
                                    <strong>Fase Berkelanjutan:</strong> Peningkatan budaya aman dengan dukungan teknologi, 
                                    program kesehatan, dan kampanye keselamatan di lingkungan kerja.
                                </li>
                            </ul>
                            <p class="text-muted">
                                Dengan perjalanan tersebut, Family Mart membuktikan bahwa K3 bukan hanya kewajiban, tetapi sebuah investasi jangka panjang untuk menjaga keberlangsungan perusahaan dan kepuasan pelanggan.
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
