<!DOCTYPE html>
<html>
<head>
    <title>Toko Makanan Modern</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3135/3135755.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            transition: background 0.3s, color 0.3s;
        }
        .navbar {
            background: linear-gradient(90deg, #6366f1 0%, #06b6d4 100%) !important;
        }
        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff !important;
            font-size: 1.5rem;
        }
        .navbar .btn-outline-danger {
            border-color: #fff;
            color: #fff;
        }
        .navbar .btn-outline-danger:hover {
            background: #fff;
            color: #06b6d4;
        }
        .card {
            box-shadow: 0 4px 24px rgba(6,182,212,0.10);
            border-radius: 16px;
            animation: fadeInUp 0.7s;
            border: none;
        }
        .btn-primary {
            background: linear-gradient(90deg, #6366f1 0%, #06b6d4 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #06b6d4 0%, #6366f1 100%);
        }
        .btn-success {
            background: linear-gradient(90deg, #22c55e 0%, #06b6d4 100%);
            border: none;
        }
        .btn-success:hover {
            background: linear-gradient(90deg, #06b6d4 0%, #22c55e 100%);
        }
        .btn-warning {
            background: linear-gradient(90deg, #f59e42 0%, #fbbf24 100%);
            border: none;
            color: #fff;
        }
        .btn-warning:hover {
            background: linear-gradient(90deg, #fbbf24 0%, #f59e42 100%);
            color: #fff;
        }
        .btn-danger {
            background: linear-gradient(90deg, #ef4444 0%, #f59e42 100%);
            border: none;
        }
        .btn-danger:hover {
            background: linear-gradient(90deg, #f59e42 0%, #ef4444 100%);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        footer {
            margin-top: 40px;
            color: #6366f1;
            text-align: center;
            font-size: 1.05rem;
            font-weight: 500;
        }
        .dark-mode {
            background: #181a1b !important;
            color: #f1f1f1 !important;
        }
        .dark-mode .card, .dark-mode .navbar, .dark-mode .bg-white {
            background: #23272b !important;
            color: #f1f1f1 !important;
        }
        .dark-mode footer {
            color: #06b6d4;
        }
        .dark-toggle {
            cursor: pointer;
            border: none;
            background: none;
            font-size: 1.2rem;
            margin-left: 1rem;
        }
    </style>
</head>
<body>
    @if (Request::is('login'))
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="w-100" style="max-width: 400px;">
                @yield('content')
                <!-- <div class="text-center mt-3">
                    <span>Belum punya akun?</span>
                    <a href="#" class="btn btn-link p-0 align-baseline disabled">Register</a>
                </div> -->
            </div>
        </div>
    @else
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container">
                <a class="navbar-brand" href="#">Toko Makanan Modern</a>
                <div class="d-flex align-items-center">
                    <button class="dark-toggle" id="darkToggle" title="Toggle dark mode">🌙</button>
                    @auth
                        <span class="me-3 text-secondary">{{ Auth::user()->email }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>
        <div class="container">
            @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-4 mb-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer>
            &copy; {{ date('Y') }} Toko Makanan Modern &mdash; Built with Laravel & Bootstrap
        </footer>
    @endif
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Dark mode toggle
        const toggle = document.getElementById('darkToggle');
        if(toggle) {
            toggle.onclick = function() {
                document.body.classList.toggle('dark-mode');
            }
        }
    </script>
</body>
</html>
