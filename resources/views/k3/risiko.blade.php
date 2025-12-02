@extends('layouts.app')

@section('title', 'Penilaian Risiko FamilyMart - K3')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section position-relative text-white py-5"
    style="background: url('https://images.unsplash.com/photo-1581091012184-5c3a4b8b744b?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
    <div class="overlay position-absolute w-100 h-100"
        style="background: linear-gradient(135deg, rgba(0,123,255,0.85), rgba(40,167,69,0.85)); top:0; left:0;">
    </div>
    <div class="container position-relative text-center">
        <h1 class="display-4 fw-bold">Penilaian Risiko FamilyMart</h1>
        <p class="lead">Identifikasi bahaya, tingkat risiko, dan pengendalian di setiap area kerja</p>
    </div>
</section>
<!-- CUSTOM TABLE STYLE -->
<style>
    .risk-table thead {
        background: #28a745 !important;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    .risk-title {
        text-align: center;
        background: #e8f7ee;
        padding: 12px;
        border-radius: 8px;
        font-size: 1.25rem;
    }

    .control-card {
        border-radius: 12px;
        border-left: 6px solid #28a745;
        background: #f8fffa;
        padding: 18px 20px;
        height: 100%;
    }

    .control-card h5 {
        color: #28a745;
        font-weight: bold;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #28a745;
    }
</style>

<section class="section-padding bg-light py-5">
    <div class="container">

        <!-- JUDUL UTAMA -->
        <div class="text-center mb-5">
            <h2 class="section-title">Tabel Penilaian Risiko</h2>
            <p class="text-muted">FamilyMart Indonesia</p>
        </div>

        <!-- ========================= AREA DAPUR ========================= -->
        <h4 class="fw-bold mt-4 mb-3 risk-title">
            <i class="fas fa-fire me-2 text-danger"></i>Area Dapur
        </h4>

        <div class="table-responsive mb-4">
            <table class="table table-bordered table-sm risk-table">
                <thead class="text-center">
                    <tr>
                        <th>Sumber Bahaya</th>
                        <th>Kemungkinan</th>
                        <th>Dampak</th>
                        <th>Tingkat Risiko</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luka bakar dari mesin pemanas / oven / microwave</td>
                        <td>Sedang</td>
                        <td>Berat</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Suhu alat tinggi & kontak tidak sengaja bisa terjadi.</td>
                    </tr>
                    <tr>
                        <td>Luka bakar dari minyak panas / air boiler</td>
                        <td>Sedang</td>
                        <td>Berat</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Risiko percikan saat pemanasan.</td>
                    </tr>
                    <tr>
                        <td>Luka sayat pisau / cutter</td>
                        <td>Tinggi</td>
                        <td>Sedang</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Karena penggunaan intens setiap hari.</td>
                    </tr>
                    <tr>
                        <td>Tersengat listrik dari alat rusak</td>
                        <td>Rendah</td>
                        <td>Berat</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Jika peralatan tidak dirawat.</td>
                    </tr>
                    <tr>
                        <td>Terpeleset akibat lantai licin/minyak</td>
                        <td>Tinggi</td>
                        <td>Sedang</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Dapur sering basah akibat cuci & tumpahan.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ========================= AREA KASIR ========================= -->
        <h4 class="fw-bold mt-5 mb-3 risk-title">
            <i class="fas fa-cash-register me-2 text-success"></i>Area Kasir
        </h4>

        <div class="table-responsive mb-4">
            <table class="table table-bordered table-sm risk-table">
                <thead class="text-center">
                    <tr>
                        <th>Sumber Bahaya</th>
                        <th>Kemungkinan</th>
                        <th>Dampak</th>
                        <th>Tingkat Risiko</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Keseleo tangan akibat scanning berulang</td>
                        <td>Sedang</td>
                        <td>Ringan</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Gerakan repetitif.</td>
                    </tr>
                    <tr>
                        <td>Pingsan karena kelelahan/dehidrasi</td>
                        <td>Rendah</td>
                        <td>Berat</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Shift panjang & berdiri lama.</td>
                    </tr>
                    <tr>
                        <td>Luka sayat dari struk/kardus</td>
                        <td>Tinggi</td>
                        <td>Ringan</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Kejadian kecil tapi sering.</td>
                    </tr>
                    <tr>
                        <td>Stres kerja</td>
                        <td>Tinggi</td>
                        <td>Sedang</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Interaksi intens dengan pelanggan.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ========================= AREA GUDANG ========================= -->
        <h4 class="fw-bold mt-5 mb-3 risk-title">
            <i class="fas fa-warehouse me-2 text-secondary"></i>Area Gudang
        </h4>

        <div class="table-responsive mb-4">
            <table class="table table-bordered table-sm risk-table">
                <thead class="text-center">
                    <tr>
                        <th>Sumber Bahaya</th>
                        <th>Kemungkinan</th>
                        <th>Dampak</th>
                        <th>Tingkat Risiko</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Barang jatuh dari rak</td>
                        <td>Sedang</td>
                        <td>Berat</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Rak tinggi & barang bertumpuk.</td>
                    </tr>
                    <tr>
                        <td>Cedera punggung karena angkat beban</td>
                        <td>Tinggi</td>
                        <td>Sedang</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Beban galon/kardus berat.</td>
                    </tr>
                    <tr>
                        <td>Terpeleset lantai basah</td>
                        <td>Sedang</td>
                        <td>Sedang</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Tumpahan atau bocor AC.</td>
                    </tr>
                    <tr>
                        <td>Benturan kepala dengan rak</td>
                        <td>Sedang</td>
                        <td>Ringan</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Area sempit.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ========================= CLEANING SERVICE ========================= -->
        <h4 class="fw-bold mt-5 mb-3 risk-title">
            <i class="fas fa-broom me-2 text-info"></i>Cleaning Service
        </h4>

        <div class="table-responsive mb-4">
            <table class="table table-bordered table-sm risk-table">
                <thead class="text-center">
                    <tr>
                        <th>Sumber Bahaya</th>
                        <th>Kemungkinan</th>
                        <th>Dampak</th>
                        <th>Tingkat Risiko</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Iritasi kulit/mata dari chemical</td>
                        <td>Sedang</td>
                        <td>Sedang</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Zat iritan bahan pembersih.</td>
                    </tr>
                    <tr>
                        <td>Keracunan uap chemical</td>
                        <td>Rendah</td>
                        <td>Berat</td>
                        <td class="text-warning fw-bold">Sedang</td>
                        <td>Tanpa ventilasi & masker.</td>
                    </tr>
                    <tr>
                        <td>Terpeleset lantai basah</td>
                        <td>Tinggi</td>
                        <td>Sedang</td>
                        <td class="text-danger fw-bold">Tinggi</td>
                        <td>Lantai selesai dipel.</td>
                    </tr>
                </tbody>
            </table>
        </div>

       <!-- ========================= PENGENDALIAN ========================= -->
        <h3 class="fw-bold text-center mt-5 text-success">
            <i class="fas fa-tools me-2"></i>Tindakan Pengendalian Risiko
        </h3>

        <div class="row mt-4">

            <!-- Kitchen -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Kitchen / Dapur</h5>
                        <ul class="small text-muted mt-2">
                            <li>Gunakan sarung tangan tahan panas.</li>
                            <li>Matikan mesin saat tidak digunakan.</li>
                            <li>SOP penggunaan pisau & cutter.</li>
                            <li>Keringkan lantai secara berkala.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kasir -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Kasir & Pelayanan</h5>
                        <ul class="small text-muted mt-2">
                            <li>Gunakan matras anti-fatigue.</li>
                            <li>Rotasi shift setiap beberapa jam.</li>
                            <li>Pastikan area kerja ergonomis.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gudang -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Area Gudang</h5>
                        <ul class="small text-muted mt-2">
                            <li>Pelatihan teknik angkat beban.</li>
                            <li>Label barang berat.</li>
                            <li>Cek rak secara rutin.</li>
                            <li>Gunakan sepatu safety.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Cleaning -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Cleaning Service</h5>
                        <ul class="small text-muted mt-2">
                            <li>Gunakan APD lengkap.</li>
                            <li>Simpan chemical di ruang khusus.</li>
                            <li>Gunakan tanda Wet Floor.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>



        <!-- ========================= PEMANTAUAN ========================= -->
        <h3 class="fw-bold text-center mt-5 text-success">
            <i class="fas fa-search me-2"></i>Strategi Pemantauan & Review
        </h3>

        <div class="row mt-4">

            <!-- Inspeksi -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Inspeksi Rutin</h5>
                        <ul class="small text-muted mt-2">
                            <li>Inspeksi harian area dapur & lantai.</li>
                            <li>Pengecekan microwave & mesin pemanas.</li>
                            <li>Kerapihan rak gudang & penyimpanan.</li>
                            <li>Pencatatan oleh supervisor.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Checklist K3 -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Checklist K3 Harian</h5>
                        <ul class="small text-muted mt-2">
                            <li>APD digunakan sesuai SOP.</li>
                            <li>Pengecekan SOP alat panas & pisau.</li>
                            <li>Chemical diberi label & disimpan aman.</li>
                            <li>Barang tertata rapi & tidak overload.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Near Miss -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Review Insiden & Near-Miss</h5>
                        <ul class="small text-muted mt-2">
                            <li>Setiap near-miss dicatat & dianalisis.</li>
                            <li>Dibahas pada meeting mingguan.</li>
                            <li>Mencegah kejadian serupa terulang.</li>
                            <li>Pembaruan SOP bila perlu.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pelatihan -->
            <div class="col-md-6 mb-3">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-family-blue">Pelatihan Ulang</h5>
                        <ul class="small text-muted mt-2">
                            <li>Pelatihan alat panas & coffee machine.</li>
                            <li>Teknik angkat beban ergonomis.</li>
                            <li>Penanganan chemical.</li>
                            <li>Dilakukan minimal 3 bulan sekali.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <!-- TOMBBOL KEMBALI -->
        <div class="text-center mt-5">
            <a href="{{ url('/k3#program-k3') }}" class="btn btn-success px-4 py-2 shadow-lg">
                <i class="fas fa-arrow-left me-2"></i> Kembali ke Program K3
            </a>
        </div>

    </div>
</section>

@endsection