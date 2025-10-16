<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Family Mart Indonesia - Company Profile')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --family-green: #00A650;
            --family-blue: #005BAC;
            --family-white: #FFFFFF;
            --family-light-blue: #E6F2FF;
            --family-light-green: #F0F9F0;
        }
        
        .bg-family-green { background-color: var(--family-green) !important; }
        .bg-family-blue { background-color: var(--family-blue) !important; }
        .bg-family-light-blue { background-color: var(--family-light-blue) !important; }
        .bg-family-light-green { background-color: var(--family-light-green) !important; }
        
        .text-family-green { color: var(--family-green) !important; }
        .text-family-blue { color: var(--family-blue) !important; }
        
        .btn-family-green { 
            background-color: var(--family-green); 
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-family-green:hover {
            background-color: #008040;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 166, 80, 0.3);
        }
        
        .btn-family-blue { 
            background-color: var(--family-blue); 
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-family-blue:hover {
            background-color: #004580;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 91, 172, 0.3);
        }
        
        .navbar-brand img {
            max-height: 50px;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--family-white) 0%, #f8f9fa 100%);
            box-shadow: 0 2px 20px rgba(0, 91, 172, 0.1);
        }
        
        .nav-link {
            color: var(--family-blue) !important;
            font-weight: 500;
            margin: 0 10px;
            padding: 8px 16px !important;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: var(--family-light-blue);
            color: var(--family-blue) !important;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--family-blue) 0%, var(--family-green) 100%);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" opacity="0.1"><circle cx="50" cy="50" r="2" fill="white"/></svg>');
            background-size: 50px 50px;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .k3-card {
            transition: transform 0.3s ease;
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 91, 172, 0.1);
            border-top: 4px solid var(--family-green);
            overflow: hidden;
        }
        
        .k3-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 91, 172, 0.2);
        }
        
        .footer {
            background: linear-gradient(135deg, var(--family-blue) 0%, #004580 100%);
            color: white;
            padding: 50px 0 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: var(--family-green);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .k3-badge {
            background: linear-gradient(45deg, var(--family-green), var(--family-blue));
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--family-green), var(--family-blue));
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            padding: 20px;
            background: var(--family-light-blue);
            border-radius: 10px;
            border-left: 4px solid var(--family-blue);
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 25px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--family-green);
            border: 4px solid white;
            box-shadow: 0 0 0 3px var(--family-green);
        }
        
        .gradient-text {
            background: linear-gradient(45deg, var(--family-green), var(--family-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 40px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, var(--family-green), var(--family-blue));
            border-radius: 2px;
        }
        
        .contact-info .fa-2x {
            background: linear-gradient(45deg, var(--family-green), var(--family-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/familymart-logo.jpg') }}" alt="Family Mart Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('k3') }}">K3 & Keamanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="{{ asset('images/familymart-logo.jpg') }}" alt="Family Mart Logo" height="40" class="mb-3">
                    <p class="mb-3">Komitmen kami terhadap Keselamatan dan Kesehatan Kerja (K3) menjadikan Family Mart tempat yang aman dan nyaman bagi karyawan dan pelanggan.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/FamilyMartID" class="text-white me-3" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://www.instagram.com/familymartid" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://www.linkedin.com/company/familymart-indonesia" class="text-white me-3" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="https://www.youtube.com/@familymart" class="text-white me-3" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
                        <a href="https://x.com/FamilyMartID" class="text-white me-3" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.tiktok.com/@familymartindonesia" class="text-white me-3" target="_blank"><i class="fab fa-tiktok fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white-50">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-white-50">Tentang Kami</a></li>
                        <li><a href="{{ route('k3') }}" class="text-white-50">K3 & Keamanan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.familymartindonesia.com/promo" class="text-white-50" target="_blank">Promo</a></li>
                        <li><a href="http://fmi.familymartindonesia.com/walkin" class="text-white-50" target="_blank">Karir</a></li>
                        <li><a href="https://fmimyadmin.familymartindonesia.com/Privacy" class="text-white-50" target="_blank">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>Jl. MH Thamrin No. 1, Jakarta 10310</li>
                        <li><i class="fas fa-phone me-2"></i>(+62) 898-3862-898</li>
                        <li><i class="fas fa-envelope me-2"></i>info.k3@familymart.co.id</li>
                        <li><i class="fas fa-clock me-2"></i>Senin - Jumat: 08:00 - 17:00</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} PT Family Mart Indonesia. Seluruh hak cipta dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    
    @yield('scripts')
</body>
</html>