<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">

            <a class="navbar-brand text-white fw-bold" href="{{ route('kost.index') }}">
                Aplikasi Pendataan Kost
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"
                id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-white" href="{{ route('kost.index') }}">Data Kost</a>
                    <a class="nav-link text-white" href="{{ route('kost.create') }}">Tambah Kost</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- Page Title -->
    <div class="bg-danger py-5 text-center text-white">
        <h1 class="fw-bold">
            {{ $title }}
        </h1>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>