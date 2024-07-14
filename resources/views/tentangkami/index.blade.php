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
        /* Custom CSS styles can go here */
        /* Styling for Jumbotron */
        .jumbotron {
            background-image: url('{{ asset('image/gambar.jpeg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            height: 400px;
            position: relative;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jumbotron .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay color */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white; /* Teks warna putih */
            padding: 20px; /* Padding untuk teks di dalam overlay */
        }

        /* Styling for Content Section */
        .content {
            margin-top: 40px;
            text-align: justify;
            color: #555; /* Warna teks */
            background-color: #f2f9f2; /* Warna latar belakang */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow untuk konten */
        }

        /* Styling for Profile Cards */
        .profile-card {
            margin-bottom: 20px;
        }

        .profile-card img {
            border: 5px solid #fff; /* White border around images */
            border-radius: 50%; /* Rounded profile images */
        }

        /* Additional Styling for Heading and Paragraph */
        h2 {
            margin-bottom: 30px;
            color: #333; /* Warna untuk judul */
        }

        p {
            margin-bottom: 15px;
        }

        .jumbotron {
            background-color: #218838; /* Warna hijau untuk Jumbotron */
        }

        .jumbotron .overlay {
            background-color: rgba(156, 224, 155, 0.585); /* Warna overlay hijau */
        }

        .lead {
            color: #fff; /* Warna teks putih untuk lead */
        }

        .content {
            background-color: #d2ffe4; /* Warna latar belakang konten putih */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow untuk konten */
        }

        .profile-card img {
            border-color: #055604; /* Border warna hijau untuk gambar profil */
        }

        .profile-card p {
            color: #555; /* Warna teks untuk nama profil */
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

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="overlay">
        <h1 class="display-4">Tentang Kami</h1>
    </div>
</div>

<!-- Content -->
<div class="container">
    <div class="content">
        <h5>
            Selamat datang di halaman kami! Kami adalah komunitas yang berkomitmen untuk menciptakan perubahan positif dalam masyarakat. Dengan keyakinan kuat bahwa setiap individu memiliki potensi untuk berbuat baik, kami menyediakan platform untuk mendukung berbagai inisiatif amal dan kegiatan sosial.
            <br><br>
        </h5>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow bg-card-custom">
            <div class="card-body">
                <h2 class="card-title">MISI KAMI</h2>
                <p class="card-text">Misi kami adalah memfasilitasi kolaborasi antara para dermawan dan penerima manfaat, sehingga setiap sumbangan yang diberikan memiliki dampak yang signifikan. Kami percaya bahwa melalui kerjasama yang solid, kita dapat membangun masyarakat yang lebih baik dan berkelanjutan.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow bg-card-custom">
            <div class="card-body">
                <h2 class="card-title">Filosofi Donasi Kami</h2>
                <p class="card-text">Kami menghargai setiap sumbangan, besar maupun kecil, karena kami percaya bahwa kesediaan untuk berbagi adalah pondasi dari perubahan yang kita inginkan. Donasi Anda tidak hanya membantu individu yang membutuhkan, tetapi juga memperkuat ikatan sosial di antara komunitas yang peduli.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow bg-card-custom">
            <div class="card-body">
                <h2 class="card-title">Nilai Kami</h2>
                <p class="card-text">Integritas<br>Transparansi<br>Kerjasama<br>Inovasi</p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Profil Cards -->
<div class="container mt-4 text-center">
    <h2>Profil Kami</h2>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="profile-card">
                <img src="{{ asset('image/profiladel.jpeg') }}" alt="profiladel" class="img-fluid rounded-circle mb-3" width="130">
                <p>Adela Nanda</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="profile-card">
                <img src="{{ asset('image/profiltasya.jpeg') }}" alt="profiltasya" class="img-fluid rounded-circle mb-3" width="130">
                <p>Tasya Regiana</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="profile-card">
                <img src="{{ asset('image/profilalvin.jpeg') }}" alt="profilalvin" class="img-fluid rounded-circle mb-3" width="130">
                <p>Muhamad Alvin</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="profile-card">
                <img src="{{ asset('image/profileva.jpeg') }}" alt="profileva" class="img-fluid rounded-circle mb-3" width="130">
                <p>Eva Nurrahma</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="profile-card">
                <img src="{{ asset('image/profilgaluh.jpeg') }}" alt="profilgaluh" class="img-fluid rounded-circle mb-3" width="130">
                <p>Galuh Shoutika</p>
            </div>
        </div>
        <!-- Tambahkan div lainnya untuk setiap profil -->
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
