<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Family Mart K3 System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --family-blue: #2a5298;
            --family-green: #28a745;
            --family-light-blue: #e8f4fd;
        }

        .login-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            overflow: hidden;
        }

        .login-left {
            background: linear-gradient(rgba(26, 58, 114, 0.85), rgba(26, 58, 114, 0.9)),
                url('https://image.fortuneidn.com/post/20250114/familymartid-471255397-908175264838435-453425417223933277-n-69796d1b8ed6f9efc37d28f835cd3e10-a81953a9049f4584d71ef8c81e9b6a69.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            position: relative;
        }

        .login-right {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
        }

        .login-form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            max-width: 450px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .login-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--family-blue), var(--family-green));
        }

        .brand-logo {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--family-blue), var(--family-green));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            box-shadow: 0 10px 30px rgba(42, 82, 152, 0.3);
            transform: rotate(45deg);
            transition: transform 0.5s ease;
        }

        .brand-logo:hover {
            transform: rotate(0deg) scale(1.1);
        }

        .brand-logo i {
            transform: rotate(-45deg);
            color: white;
            font-size: 2.5rem;
        }

        .brand-logo:hover i {
            transform: rotate(0deg);
        }

        .welcome-text {
            text-align: center;
            margin-bottom: 3rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
            text-align: left;
        }

        .feature-list li {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
            opacity: 0;
            transform: translateX(-50px);
            animation: slideInLeft 0.8s ease forwards;
        }

        .feature-list li:nth-child(1) {
            animation-delay: 0.2s;
        }

        .feature-list li:nth-child(2) {
            animation-delay: 0.4s;
        }

        .feature-list li:nth-child(3) {
            animation-delay: 0.6s;
        }

        .feature-list li:nth-child(4) {
            animation-delay: 0.8s;
        }

        .feature-list i {
            background: var(--family-green);
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.1rem;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
        }

        .form-control {
            border: 2px solid #e9ecef;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: var(--family-blue);
            box-shadow: 0 0 0 0.3rem rgba(42, 82, 152, 0.1);
            transform: translateY(-2px);
        }

        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-right: none;
            border-radius: 12px 0 0 12px;
            padding: 1rem 1.5rem;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--family-blue), var(--family-green));
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 82, 152, 0.3);
        }

        .alert {
            border: none;
            border-radius: 12px;
            padding: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Animations */
        @keyframes slideInLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-100px);
            animation: slideInLeft 1s ease-out forwards;
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(100px);
            animation: slideInRight 1s ease-out forwards;
        }

        .form-group {
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 0.8s ease forwards;
        }

        .form-group:nth-child(1) {
            animation-delay: 0.3s;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.5s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.7s;
        }

        .form-group:nth-child(4) {
            animation-delay: 0.9s;
        }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Toast Notification */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        @media (max-width: 768px) {
            .login-left {
                display: none;
            }

            .login-form-container {
                margin: 1rem;
                padding: 2rem;
            }
        }

        /* Floating background elements */
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            top: -50px;
            right: -50px;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            bottom: 50px;
            left: -50px;
        }
    </style>
</head>

<body>
    <div class="container-fluid login-container">
        <div class="row min-vh-100">
            <!-- Left Side - Brand & Info -->
            <div class="col-lg-7 login-left">
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                </div>
                <div class="text-center slide-in-left">
                    <div class="brand-logo">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h1 class="display-4 fw-bold mb-3">Family Mart K3</h1>
                    <p class="lead mb-4">Sistem Informasi Keselamatan dan Kesehatan Kerja Terintegrasi</p>

                    <div class="feature-list">
                        <li>
                            <i class="fas fa-database"></i>
                            <span>
                                <strong>Database Rambu K3 Digital</strong><br>
                                <small>Akses lengkap semua rambu keselamatan</small>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-file-medical"></i>
                            <span>
                                <strong>Pelaporan Insiden Real-time</strong><br>
                                <small>Laporkan kondisi tidak aman dengan cepat</small>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-bullhorn"></i>
                            <span>
                                <strong>Pengumuman K3 Terpusat</strong><br>
                                <small>Informasi penting tersebar merata</small>
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-balance-scale"></i>
                            <span>
                                <strong>Regulasi K3 Terupdate</strong><br>
                                <small>Selalu sesuai peraturan terbaru</small>
                            </span>
                        </li>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="col-lg-5 login-right">
                <div class="login-form-container slide-in-right">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-family-blue">Masuk ke Sistem</h2>
                        <p class="text-muted">Gunakan kredensial perusahaan Anda</p>
                    </div>

                    <!-- Alert Area -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Login gagal!</strong> Periksa kembali email dan password.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="email" class="form-label fw-semibold">Email Perusahaan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope text-family-blue"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="nama@familymart.co.id" required autofocus>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock text-family-blue"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan kata sandi" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Ingat perangkat ini</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt me-2"></i>Masuk ke Sistem
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Untuk masalah teknis, hubungi <strong>IT Support</strong>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-container">
        <!-- Toast akan ditampilkan via JavaScript -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Function untuk show toast notification
        function showToast(message, type = 'success') {
            const toastContainer = document.querySelector('.toast-container');
            const toastId = 'toast-' + Date.now();

            const toastHTML = `
                <div id="${toastId}" class="toast align-items-center text-white bg-${type} border-0" role="alert">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            `;

            toastContainer.insertAdjacentHTML('beforeend', toastHTML);

            const toastElement = document.getElementById(toastId);
            const toast = new bootstrap.Toast(toastElement, {
                delay: 4000,
                animation: true
            });
            toast.show();

            // Remove toast from DOM after hide
            toastElement.addEventListener('hidden.bs.toast', () => {
                toastElement.remove();
            });
        }

        // Check jika ada session success
        @if(session('success'))
            showToast('{{ session('success') }}', 'success');
        @endif

        // Add loading state to login button
        document.querySelector('form')?.addEventListener('submit', function (e) {
            const btn = this.querySelector('button[type="submit"]');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
            btn.disabled = true;
        });
    </script>
</body>

</html>