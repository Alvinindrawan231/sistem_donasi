<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Website Donasi Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            background-color: #bcf8dae4;
            color: #080808;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Jumbotron */
        .jumbotron {
            background-color: #fcfffef3;
            border-radius: 5px;
            padding: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .jumbotron h1 {
            color: #333;
        }
        .jumbotron p.lead {
            color: #666;
        }
        .jumbotron .btn-primary {
            background-color: #28a745; /* Hijau */
            border-color: #28a745; /* Hijau */
        }
        .jumbotron .btn-primary:hover {
            background-color: #218830; /* Hijau lebih gelap */
            border-color: #1e7e34; /* Hijau lebih gelap */
        }
        /* Cards */
        .card {
            background-color: #fffcfc;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(24, 153, 245, 0.736);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card-body {
            color: #333;
        }
        .card-title {
            color: #28a745; /* Hijau */
        }
        .card-text {
            color: #666;
        }
        .card .btn-primary {
            background-color: #28a745; /* Hijau */
            border-color: #28a745; /* Hijau */
        }
        .card .btn-primary:hover {
            background-color: #218838; /* Hijau lebih gelap */
            border-color: #1e7e34; /* Hijau lebih gelap */
        }
        /* Back Link */
        a.text-decoration-none.text-dark {
            color: #333;
        }
        a.text-decoration-none.text-dark:hover {
            color: #218838; /* Hijau lebih gelap */
        }
        /* Footer */
        footer {
            background-color: #4cd5a0bc;
            color: #333;
            padding: 20px 0;
        }
        footer .container {
            text-align: center;
        }
        footer ul {
            list-style-type: none;
            padding-left: 0;
        }
        footer ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/donasi.jpeg') }}" alt="Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Welcome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('donasi') }}">Donasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('daftar') }}">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Content -->
<div class="container">
    <div class="jumbotron mt-4 text-center">
        <h1 class="display-4">Selamat Datang di Website Donasi Kami!</h1>
        <p class="lead">Peduli dan Berbagi, Menciptakan Senyum di Setiap Wajah Platform kami yang didedikasikan untuk membantu panti asuhan dan anak-anak yang membutuhkan. Di sini, Anda dapat berperan aktif dalam memberikan dukungan dan kebahagiaan bagi mereka. Melalui aplikasi ini, Anda dapat dengan mudah berdonasi dan berpartisipasi dalam kegiatan amal untuk memberikan dampak yang nyata.</p>
        <hr class="my-4">
        <p>Mulai berdonasi sekarang dan buat perubahan nyata.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('donasi') }}" role="button">Mulai Donasi</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('image/poster6.jpeg') }}" alt="poster6">
                <div class="card-body">
                    <h5 class="card-title">Bantu Renovasi Rumah Warga Dhuafa Palestina</h5>
                    <p class="card-text">Pengetatan Blokade Israel atas Gaza yang dimulai pada tahun 2007 membawa dampak yang sangat buruk pada wilayah Gaza. Kondisi ini diperparah oleh sejumlah agresi yang dilancarkan militer Israel atas wilayah Gaza hingga hari ini.</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('image/poster7.png') }}" alt="poster7">
                <div class="card-body">
                    <h5 class="card-title">DONASI SOSIAL, INFAK DAN SEDEKAH </h5>
                    <p class="card-text">adalah program donasi untuk memenuhi kebutuhan dana operasional Lembaga Wakaf MUI dan untuk Gerakan dakwah dan penguatan ekonomi umat.</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ asset('image/poster8.jpg') }}" alt="poster8">
                <div class="card-body">
                    <h5 class="card-title">Peduli Gempa Cianjur</h5>
                    <p class="card-text">Innalillahi wainna ilaihi raji'un...</p> 
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Informasi Tambahan</h5>
                <p>
                    Semoga Allah Subhanawata’ala akan membalas semua kebaikkan dari Bapak Ibu semua. Jazakumullahukhairan.
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Tautan</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-dark">www.donasi@kelompok2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">www.sistemdonasi@kelompok2</a>
                    </li>
                    <!-- Tambahkan tautan tambahan sesuai kebutuhan -->
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Hubungi Kami</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        Email: sistemdonasi@gmail.com
                    </li>
                    <li>
                        Telepon: +1234567890
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Nama Situs Web:Donasi kelompok 2
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
