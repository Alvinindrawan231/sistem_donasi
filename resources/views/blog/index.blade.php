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
        .hero-section {
        position: relative;
        z-index: 1;
        text-align: center;
        color: #fff;
        padding: 100px 0;
    }
    .hero-section .container {
        position: relative;
        z-index: 2;
    }
    .hero-section .stats {
        margin-top: 50px;
    }
    .hero-section .stat h3 {
        font-size: 2rem;
    }
    .hero-section .stat p {
        font-size: 1.2rem;
    }
    .hero-section:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(40, 121, 94, 0.5);
        z-index: 1;
    }
    .stats-section img {
        max-width: 150px;
        margin-right: 20px;
    }
    .content-with-image {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .content-with-image .image-container {
        flex: 1;
        margin-right: 20px;
    }
    .content-with-image .text-container {
        flex: 2;
    }
    .blog-section .card {
        margin-bottom: 20px;
    }

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
            color: #010101; /* Warna teks */
            background-color: #45745d; /* Warna latar belakang */
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
            background-color: #2c652b; /* Warna hijau untuk Jumbotron */
        }

        .jumbotron .overlay {
            background-color: rgba(44, 101, 43, 0.7); /* Warna overlay hijau */
        }

        .lead {
            color: #fff; /* Warna teks putih untuk lead */
        }

        .content {
            background-color: #bcf8dae4; /* Warna latar belakang konten putih */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow untuk konten */
        }

        .profile-card img {
            border-color: #54602f; /* Border warna hijau untuk gambar profil */
        }

        .profile-card p {
            color: #398558; /* Warna teks untuk nama profil */
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

<div class="hero-section text-center d-flex align-items-center" style="background: url('/path/to/your/background-image.jpg') no-repeat center center; background-size: cover; height: 100vh; color: white;">
    <div class="container">
        <h1 class="display-4 mb-4">Satu Donasi Sejuta Senyum</h1>
        <p class="lead mb-4">Kami membuka donasi bagi siapapun yang ingin menyisihkan sebagian bagi mereka yang membutuhkan, karena sebagian rezeki kita ada hak untuk orang lain</p>
        <div class="stats mt-5 d-flex justify-content-center">
            <div class="stat mr-4">
                <h3>2.10</h3>
                <p>Rating</p>
            </div>
            <div class="stat mr-4">
                <h3>14+</h3>
                <p>Reviews</p>
            </div>
            <div class="stat mr-4">
                <h3>1,000+</h3>
                <p>User Aktif</p>
            </div>
            <div class="stat">
                <h3>50,000</h3>
                <p>Downloads</p>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
<div class="container">
    <div class="content">
        <h3>Halo Sahabat Peduli!</h3>
        <h5>
            Kami ingin berbagi cerita tentang Panti Asuhan Kita, tempat di mana anak yatim dan kurang beruntung menemukan harapan dan kasih sayang. Di panti ini, mereka mendapatkan pendidikan, makanan, dan perlindungan yang mereka butuhkan untuk tumbuh menjadi individu yang mandiri dan berdaya saing. Namun, seperti banyak panti asuhan lainnya, Panti Asuhan Kita menghadapi tantangan besar dalam memenuhi kebutuhan sehari-hari. Dengan semakin meningkatnya biaya hidup dan kebutuhan pendidikan, kami memerlukan bantuan dari orang-orang baik hati seperti Anda untuk terus memberikan yang terbaik bagi anak-anak ini.
            <br><br>
            <b>Mengapa Donasi Anda Penting?</b>
            <ul>
                <li>Pendidikan Berkualitas: Anak-anak di Panti Asuhan Kita berhak mendapatkan pendidikan yang layak. Donasi Anda akan membantu membiayai buku, seragam, dan biaya sekolah mereka.</li>
                <li>Kesehatan dan Gizi: Asupan gizi yang cukup sangat penting untuk tumbuh kembang anak-anak. Dengan donasi Anda, kami dapat menyediakan makanan sehat dan perawatan medis yang dibutuhkan.</li>
                <li>Perbaikan Fasilitas: Fasilitas yang memadai seperti tempat tidur yang nyaman, ruang belajar yang baik, dan area bermain yang aman sangat diperlukan. Dukungan Anda akan membantu kami memperbaiki dan merawat fasilitas ini.</li>
            </ul>
            <b>Cerita dari Anak-anak Panti Asuhan Kita:</b>
            <h5>Salah satu anak kami, Rina, bercita-cita menjadi seorang dokter. Meski usianya baru 10 tahun, semangat belajarnya sangat tinggi. Setiap hari, dia rajin belajar dan selalu mendapat nilai bagus di sekolah. Rina adalah salah satu contoh bagaimana donasi Anda dapat mengubah hidup anak-anak panti asuhan.
            <p></p>
            <p><b>Bagaimana Anda Bisa Membantu:</b></p>
            <p><b>- Donasi Tunai:</b> Setiap rupiah yang Anda sumbangkan akan langsung digunakan untuk keperluan anak-anak di panti asuhan.</p>
            <p>Mari Bersama Menjadi Bagian dari Perubahan:</p>
            <p>Anak-anak di Panti Asuhan Kita adalah masa depan kita. Dengan dukungan Anda, kami yakin mereka dapat meraih impian mereka dan menjadi pribadi yang bermanfaat bagi masyarakat.</p>
            <p>Klik tombol donasi di bawah ini untuk mulai berbagi kasih dan harapan.</p>
            <p>Terima kasih atas kepedulian dan dukungan Anda.</p>
            <p>Dengan hangat,</p>
            <p>Panti Asuhan Kita</p>
            <p>---</p>
            <p><b>Teks ini berusaha menyampaikan kebutuhan dan tujuan donasi dengan cara yang empatik dan inspiratif, serta memberikan gambaran konkret tentang bagaimana bantuan akan digunakan dan dampak yang diharapkan.</b></p>
        </p>
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
