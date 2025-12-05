<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'ZeroInvestissement')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #6A00B8;
            --secondary-color: #00d4ff;
            --success-color: #00c853;
            --danger-color: #d32f2f;
            --warning-color: #ffc107;
            --light-bg: #f8f9fa;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: var(--primary-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            padding: 0 !important;
            display: flex;
            align-items: stretch;
        }

        .navbar > .container,
        .navbar > .container-fluid {
            padding-left: 0;
            padding-right: 0;
            margin-left: 0;
            margin-right: 0;
            max-width: 100%;
            display: flex;
            align-items: stretch;
        }

        .navbar-brand-wrapper {
            background: white;
            width: 16.66%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            min-width: 200px;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
            margin: 0;
            padding: 0;
        }

        .navbar-brand img {
            max-width: 100%;
            height: 55px;
            object-fit: contain;
        }

        .navbar-toggler {
            display: none;
        }

        .profile-link {
            font-size: 1.5rem;
            padding: 0.5rem 0.5rem !important;
            margin-right: 0;
            color: white !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 0.2rem;
        }

        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border: none;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            padding: 0.7rem 1.2rem;
            color: #333;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .dropdown-divider {
            margin: 0.5rem 0;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .navbar-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0.5rem 0;
        }

        body > .container-fluid {
            margin-top: 70px;
            margin-bottom: 0;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            background: white;
            border-right: 1px solid #e0e0e0;
            height: calc(100vh - 70px);
            overflow-y: auto;
            box-shadow: 2px 0 4px rgba(0,0,0,0.05);
            position: fixed;
            left: 0;
            top: 70px;
            width: 16.66%;
            display: flex;
            flex-direction: column;
        }

        .sidebar-user-profile {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid #e0e0e0;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .sidebar-user-profile .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;

            padding: 3px;
        }

        .sidebar-user-profile .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            background: white;
        }

        .sidebar-user-profile .user-info {
            flex: 1;
        }

        .sidebar-user-profile .user-name {
            font-weight: 600;
            color: #333;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .sidebar-user-profile .user-role {
            font-size: 0.85rem;
            color: #00bcd4;
        }

        /* Mobile bottom navigation bar */
        .sidebar-mobile {
            display: none;
        }

        @media (max-width: 1024px) {
            .navbar-brand-wrapper {
                width: 180px;
                min-width: 180px;
                padding: 0.5rem 0.75rem;
            }

            .navbar-brand img {
                height: 50px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 !important;
            }

            .navbar > .container-fluid {
                flex-wrap: nowrap;
            }

            .navbar-brand-wrapper {
                width: auto;
                min-width: 150px;
                flex: 0 0 auto;
                border-right: none;
                padding: 0.4rem 0.75rem;
                justify-content: flex-start;
            }

            .navbar-brand img {
                height: 45px !important;
            }

            .navbar-content {
                padding: 0.4rem 0.75rem;
                flex: 1;
                justify-content: flex-end;
            }

            .profile-link {
                font-size: 1.2rem;
                padding: 0.3rem !important;
                margin-right: 0;
            }

            .profile-link img {
                width: 32px !important;
                height: 32px !important;
            }

            .dropdown-menu {
                font-size: 0.9rem;
            }

            .dropdown-item {
                padding: 0.6rem 1rem;
            }

            .sidebar {
                display: none;
            }

            .sidebar-mobile {
                display: flex;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                height: 70px;
                background: white;
                border-top: 1px solid #e0e0e0;
                box-shadow: 0 -2px 4px rgba(0,0,0,0.05);
                z-index: 1020;
                align-items: center;
                justify-content: space-around;
                padding: 0;
            }

            .sidebar-mobile .nav-link {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0.5rem;
                margin-bottom: 0;
                border: none;
                border-top: 3px solid transparent;
                border-radius: 0;
                font-size: 0.75rem;
                height: 100%;
            }

            .sidebar-mobile .nav-link i {
                font-size: 1.5rem;
                margin-bottom: 0.25rem;
                margin-right: 0 !important;
            }

            .sidebar-mobile .nav-link:hover,
            .sidebar-mobile .nav-link.active {
                background-color: #f0f0f0;
                border-top-color: var(--primary-color);
                color: var(--primary-color);
                border-left: none;
            }

            .sidebar-mobile .nav-text {
                font-size: 0.7rem;
                text-align: center;
            }

            .sidebar-mobile .logout-btn {
                padding: 0.4rem 0.8rem !important;
                font-size: 0.8rem !important;
                margin-right: 0.5rem;
            }

            body > .container-fluid {
                margin-bottom: 70px;
            }

            .page-header {
                margin-bottom: 1.5rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .page-subtitle {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand-wrapper {
                min-width: 120px;
                padding: 0.4rem 0.5rem;
            }

            .navbar-brand img {
                height: 40px !important;
            }

            .navbar-content {
                padding: 0.4rem 0.5rem;
            }

            .profile-link {
                font-size: 1.1rem;
                padding: 0.25rem !important;
            }

            .profile-link img {
                width: 28px !important;
                height: 28px !important;
            }

            .page-title {
                font-size: 1.25rem;
            }

            .page-subtitle {
                font-size: 0.85rem;
            }

            .sidebar-mobile .nav-link i {
                font-size: 1.3rem;
            }

            .sidebar-mobile .nav-text {
                font-size: 0.65rem;
            }
        }

        .sidebar-content {
            flex: 1;
        }

        .sidebar-footer {
            border-top: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            margin-top: auto;
        }

        .sidebar-footer .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0.6rem 1rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .sidebar-footer .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);
        }

        .nav-link {
            color: #555;
            padding: 0.8rem 1rem;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
            margin-bottom: 0.3rem;
        }

        .nav-link:not(.profile-link):hover,
        .nav-link.active {
            background-color: #f0f0f0;
            border-left-color: var(--primary-color);
            color: var(--primary-color);
        }

        .main-content {
            padding: 2rem;
            flex: 1;
            overflow-y: auto;
            min-height: auto;
        }

        .page-header {
            margin-bottom: 2rem;
        }

        .page-title {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 2rem;
        }

        .page-subtitle {
            color: #888;
            font-size: 1rem;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }

        .card-header {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 1.25rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-label {
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0.75rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(106, 0, 184, 0.15);
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: var(--danger-color);
        }

        .invalid-feedback {
            color: var(--danger-color);
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        .btn {
            border-radius: 6px;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background: #5a0099;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .alert {
            border: none;
            border-radius: 6px;
            border-left: 4px solid;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background-color: #e8f5e9;
            border-left-color: var(--success-color);
            color: #1b5e20;
        }

        .alert-danger {
            background-color: #ffebee;
            border-left-color: var(--danger-color);
            color: #b71c1c;
        }

        .alert-warning {
            background-color: #fff3e0;
            border-left-color: var(--warning-color);
            color: #e65100;
        }

        .row-cols-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .row-cols-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .row-cols-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .row-cols-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 1200px) {
            .row-cols-3 {
                grid-template-columns: repeat(2, 1fr);
            }

            .row-cols-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .row-cols-2,
            .row-cols-3,
            .row-cols-4 {
                grid-template-columns: 1fr;
            }

            .main-content {
                padding: 1.5rem;
            }

            .page-title {
                font-size: 1.75rem;
            }

            .card-body {
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .page-subtitle {
                font-size: 0.9rem;
            }

            .card-body {
                padding: 1rem;
            }

            .row-cols-form,
            .row-cols-2,
            .row-cols-3,
            .row-cols-4 {
                grid-template-columns: 1fr;
            }

            .form-control,
            .form-select {
                font-size: 0.9rem;
                padding: 0.65rem;
            }

            .btn {
                padding: 0.65rem 1.25rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 0.75rem;
            }

            .page-title {
                font-size: 1.25rem;
            }

            .page-subtitle {
                font-size: 0.85rem;
            }

            .card-body {
                padding: 0.75rem;
            }

            .form-control,
            .form-select {
                font-size: 0.85rem;
                padding: 0.6rem;
            }

            .btn {
                padding: 0.6rem 1rem;
                font-size: 0.85rem;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .alert {
                padding: 0.75rem;
                font-size: 0.85rem;
            }
        }

        .form-section-title {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .divider {
            height: 2px;
            background: var(--primary-color);
            margin-bottom: 1.5rem;
        }



        .spinner-border {
            color: var(--primary-color);
        }

        .footer {
            margin-top: 3rem;
            padding: 1.5rem 0;
            border-top: 1px solid #e0e0e0;
            background: #f8f9fa;
            text-align: right;
        }

        .footer-text {
            color: #666;
            font-size: 0.85rem;
            margin: 0;
            padding-right: 2rem;
        }

        @media (max-width: 768px) {
            .footer {
                margin-top: 2rem;
                padding: 1rem 0;
                text-align: center;
            }

            .footer-text {
                padding-right: 0;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="navbar-brand-wrapper">
            <a class="navbar-brand" href="@auth @if(Auth::user()->role === 'admin') {{ route('admin') }} @else {{ route('dashboard') }} @endif @else / @endauth">
                <img src="{{ asset('build/assets/img/logo.png') }}" alt="ZeroInvestissement" style="height: 55px;">
            </a>
        </div>
        <div class="navbar-content">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Raccourcis">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if(Auth::user()->role === 'admin')
                                    <li><a class="dropdown-item" href="/admin"><i class="fas fa-shield-alt me-2"></i>Dashboard Admin</a></li>
                                @else
                                    <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-home me-2"></i>Dashboard</a></li>
                                    <li><a class="dropdown-item" href="/projects"><i class="fas fa-plus-circle me-2"></i>Soumettre un projet</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link profile-link" href="/profile" title="Mon Profil">
                                <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row g-0">
            <!-- Sidebar -->
            @auth
                <div class="col-md-2" style="position: relative;">
                    <div class="sidebar">
                        <!-- User Profile Section -->
                        <div class="sidebar-user-profile">
                            <div class="user-avatar">
                                <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg" alt="User Avatar">
                            </div>
                            <div class="user-info">
                                <div class="user-name">{{ Auth::user()->name }}</div>
                                @if(Auth::user()->role === 'admin')
                                    <div class="user-role" style="color: #6A00B8;">Espace admin</div>
                                @else
                                    <div class="user-role">Espace client</div>
                                @endif
                            </div>
                        </div>

                        <div class="sidebar-content">
                            @if(Auth::user()->role === 'admin')
                                <a href="/admin" class="nav-link @if(request()->is('admin')) active @endif">
                                    <i class="fas fa-shield-alt me-2"></i>Dashboard
                                </a>
                                <a href="{{ route('admin.projects') }}" class="nav-link @if(request()->is('admin/projects*')) active @endif">
                                    <i class="fas fa-tasks me-2"></i>Gestion des Projets
                                </a>
                            @else
                                <a href="/dashboard" class="nav-link @if(request()->is('dashboard')) active @endif">
                                    <i class="fas fa-home me-2"></i>Dashboard
                                </a>
                                <a href="/projects" class="nav-link @if(request()->is('projects')) active @endif">
                                    <i class="fas fa-folder-plus me-2"></i>Soumettre un Projet
                                </a>
                            @endif
                        </div>
                        <div class="sidebar-footer">
                            <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
                                @csrf
                                <button type="submit" class="logout-btn">
                                    <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endauth

            <!-- Main Content -->
            <div class="@auth col-md-10 @else col-12 @endauth">
                <div class="main-content">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="page-title">@yield('page-title', 'ZeroInvestissement')</h1>
                                <p class="page-subtitle">@yield('page-subtitle')</p>
                            </div>
                            @yield('header-actions')
                        </div>
                    </div>

                    <!-- Alerts -->
                    @include('components.alert')

                    <!-- Page Content -->
                    @yield('content')

                    <!-- Footer -->
                    <footer class="footer">
                        <p class="footer-text">© Copyright <strong>Zeroinvestissement</strong>. All Rights Reserved</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Bottom Navigation -->
    @auth
        <div class="sidebar-mobile">
            @if(Auth::user()->role === 'admin')
                <a href="/admin" class="nav-link @if(request()->is('admin')) active @endif" title="Dashboard Admin">
                    <i class="fas fa-shield-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a href="{{ route('admin.projects') }}" class="nav-link @if(request()->is('admin/projects*')) active @endif" title="Gestion des Projets">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-text">Projets</span>
                </a>
            @else
                <a href="/dashboard" class="nav-link @if(request()->is('dashboard')) active @endif" title="Dashboard">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Accueil</span>
                </a>
                <a href="/projects" class="nav-link @if(request()->is('projects')) active @endif" title="Projets">
                    <i class="fas fa-folder-plus"></i>
                    <span class="nav-text">Projets</span>
                </a>
            @endif
            <a href="/profile" class="nav-link" title="Profil">
                <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg" alt="User" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover; margin-bottom: 0.25rem;">
                <span class="nav-text">Profil</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" style="flex: 1; display: flex; align-items: center; margin: 0;">
                @csrf
                <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer; width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 0.5rem; margin: 0;" title="Déconnexion">
                    <i class="fas fa-sign-out-alt" style="font-size: 1.5rem; margin-bottom: 0.25rem;"></i>
                    <span class="nav-text">Sortir</span>
                </button>
            </form>
        </div>
    @endauth

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
