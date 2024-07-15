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
    <body>
        <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #00bfa5; /* Warna hijau kalem */
        margin: 0;
        padding: 0;
    }
    
    .navbar {
        background-color: #d7ffd9; /* Warna latar belakang navbar */
    }
    
    .navbar .navbar-brand, .navbar-nav .nav-link {
        color: #004d40; /* Warna teks navbar */
        font-weight: bold;
    }
    
    .jumbotron {
        background-color: #d7ffd9; /* Warna latar belakang jumbotron */
        text-align: left;
        padding: 50px;
        margin-top: 50px;
        border-radius: 10px;
    }
    
    .jumbotron h1 {
        color: #004d40; /* Warna teks judul */
        font-weight: bold;
    }
    
    .jumbotron p.lead {
        color: #004d40; /* Warna teks deskripsi */
        font-size: 1.2rem;
    }
    
    .jumbotron .btn-primary, .jumbotron .btn-secondary {
        font-weight: bold;
        padding: 10px 20px;
        border: none;
    }
    
    .jumbotron .btn-primary {
        background-color: #00796b; /* Warna tombol primary */
        color: white;
    }
    
    .jumbotron .btn-secondary {
        background-color: transparent; /* Warna tombol secondary */
        color: #00796b;
    }
    
    .jumbotron .btn-primary:hover, .jumbotron .btn-secondary:hover {
        background-color: #004d40;
        color: white;
    }
    
    .jumbotron img {
        max-width: 100%;
        height: auto;
        margin-top: 20px;
    }
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Welcome</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/">home</a>
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
                            <a class="nav-link" href="{{ route('daftar.index') }}">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang Di Website Donasi</h1>
            <p class="lead">Project aplikasi galang dana untuk membantu yang membutuhkan.</p>
            <hr class="my-4 bg-light">
            <p>Jadilah bagian dari perubahan dengan menyumbangkan donasi Anda sekarang.</p>
            <a class="btn btn-primary btn-lg mr-3" href="donasi" role="button">Donasi sekarang</a>
            <a class="btn btn-secondary btn-lg" href="donasi" role="button">Next</a>
            <img src="{{ asset('images/welcome.jpg') }}" alt="welcome">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow bg-card-custom">
                <div class="card-body">
                    <h2 class="card-title">Transparan</h2>
                    <p class="card-text">Kami memastikan semua donasi tercatat dengan jelas dan transparan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow bg-card-custom">
                <div class="card-body">
                    <h2 class="card-title">Efektif</h2>
                    <p class="card-text">Donasi Anda akan langsung disalurkan kepada yang membutuhkan dengan cara yang efektif.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow bg-card-custom">
                <div class="card-body">
                    <h2 class="card-title">Aman</h2>
                    <p class="card-text">Data dan donasi Anda kami jaga keamanannya dengan sistem yang handal.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Website Donasi. All rights reserved.</p>
            <p>Follow us on <a href="#">Twitter</a>, <a href="#">Facebook</a>, and <a href="#">Instagram</a>.</p>
        </div>
    </footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>