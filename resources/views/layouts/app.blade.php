<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VillaVisitors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
        }
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: var(--primary-color) !important;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">VillaVisitors</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengelolaan') }}">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile', ['username' => request()->query('username')]) }}">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            &copy; {{ date('Y') }} VillaVisitor. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
