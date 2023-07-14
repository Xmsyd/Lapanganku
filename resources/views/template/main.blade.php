<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lapanganku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/dist/kick-off.png" />
    <!-- Bootstrap icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Fikri CSS -->
    <link rel="stylesheet" href="assets/dist/css/styles.css">
    <!-- Styles -->

</head>
<body>
<header class="navbar page-header darkHeader border0 navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-inline-flex align-items-center" href="/">
            <i class="fas fa-code d-inline-flex mr-2 avatar32 bg-info-dark shadow-sm text-primary-light rounded-circle align-items-center justify-content-center fs-1x logo-icon"></i>
            <span class="text-white fs-1x font700">Lapanganku</span>
        </a>
        <ul class="nav flex-row order-lg-2 ml-auto nav-icons">
            <!-- link js -->
            <li class="nav-item dropdown user-dropdown align-items-center">
                <a class="nav-link text-white" href="#" id="dropdown-user" role="button" data-toggle="dropdown" aria-expanded="false">
                    <span class="ml-2 h-lg-down dropdown-toggle">
                        <i class="fa fa-user-circle fa-2x"></i>
                    </span>
                </a>
                <!-- Autentikasi -->
                @if (Route::has('login'))
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                    @auth
                    <a class="dropdown-item" href="{{ url('/home') }}">
                        <i class="icon-User"></i>Home
                    </a>

                    <!-- login dan sign up link -->
                    @else
                    <a class="dropdown-item" href="{{ route('login') }}">
                        <i class="icon-Newspaper"></i> Login
                    </a>

                    @if (Route::has('register'))
                    <a class="dropdown-item" href="{{ route('register') }}">
                        <i class="icon-Newspaper"></i> register
                    </a>
                    @endif

                    @endauth

                </div>
                @endif
            </li>
        </ul>
    </div>
</header>

<main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.php"><b>Lapangan</b>ku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/welcome') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
            </div>
        </div>
    </nav>

    <!-- Isi Konten -->
    <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
    </section>

</main>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="assets/dist/js/scripts.js"></script>

</body>

</html>