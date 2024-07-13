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
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        /* Header */
        header {
            background-color: #28a745;
        }
        header .navbar-nav .nav-link {
            color: white;
        }
        /* Hero Section */
        .hero {
            background-color: #2ad953;
            color: rgb(50, 194, 28);
        }
        /* Cards */
        .card {
            background-color: #f8f9fa;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(21, 139, 118, 0.753);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(12, 233, 93, 0.745);
        }
        .card .card-title {
            color: #28a745;
        }
        .card .card-text {
            color: #6c757d;
        }
        .card .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            color: rgb(255, 255, 255);
        }
        .card .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
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

<!-- Hero Section -->
<section class="hero bg-success text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Website Donasi Kami</h1>
        <p class="lead">Bantu sesama dengan berdonasi melalui platform kami</p>
        <a class="btn btn-lg btn-light" href="{{ route('daftar') }}" role="button">Mulai Salurkan Donasi</a>
    </div>
</section>

<div class="container mt-5">
    <h1 class="text-center mb-5">Donasi</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster2.jpeg') }}" alt="poster2">
                <div class="card-body">
                    <h5 class="card-title">Bantuan Sandang Dan Pangan, "O Allah, help and protect the people of Palestine" #PrayForPalestine</h5>
                    <p class="card-text">Adela Nanda Violita</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.000.526,00</p>
                    <p>Sisa: 20 hari</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster3.jpg') }}" alt="poster3">
                <div class="card-body">
                    <h5 class="card-title">Bantu Wujudkan 1.000 Alat Sekolah #YatimGaza</h5>
                    <p class="card-text">Tasya Regiana</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.211.620,00</p>
                    <p>Sisa: 31 hari</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster1.jpeg') }}" alt="poster1">
                <div class="card-body">
                    <h5 class="card-title">Wujudkan Mimpi Yatim Dzuafa dengan BESTARI</h5>
                    <p class="card-text">Muhamad Alvin</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <p>Terkumpul: Rp. 10.050.710,00</p>
                    <p>Sisa: 11 hari</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster5.png') }}" alt="poster5">
                <div class="card-body">
                    <h5 class="card-title">Bantu Wujudkan 1.000 Alat Sekolah #YatimGaza</h5>
                    <p class="card-text">Galuh Shoutika</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.211.620,00</p>
                    <p>Sisa: 31 hari</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster4.png') }}" alt="poster4">
                <div class="card-body">
                    <h5 class="card-title">Bantu Wujudkan 1.000 Alat Sekolah #YatimGaza</h5>
                    <p class="card-text">Eva Nurrahma</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.211.620,00</p>
                    <p>Sisa: 31 hari</p>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
