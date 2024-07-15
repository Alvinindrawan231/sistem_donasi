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

<!-- Hero Section -->
<section class="hero bg-success text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Website Donasi Kami</h1>
        <p class="lead">Bantu sesama dengan berdonasi melalui platform kami</p>
        <a class="btn btn-lg btn-light" href="{{ route('daftar.index') }}" role="button">Mulai Salurkan Donasi</a>
    </div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster2.jpeg') }}" alt="poster2">
                <div class="card-body">
                    <h5 class="card-title">Ringankan Penderitaan Saudara Di palestina</h5>
                    <p class="card-text">Adela Nanda Violita</p>
                    <p class="card-text"></p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.000.526,00</p>
                    <p>Sisa: 20 hari</p>
                    <a href="#" class="btn btn-primary" onclick="showDetail(
                    'Saudara kita di Palestina sedang menghadapi cobaan yang sangat berat. Konflik berkepanjangan telah meninggalkan luka mendalam, baik fisik maupun emosional. Banyak keluarga kehilangan tempat tinggal, akses ke kebutuhan dasar, dan kehidupan normal mereka. Melalui donasi Anda, kita dapat meringankan penderitaan mereka dan memberikan harapan baru. Setiap sumbangan, sekecil apapun, akan sangat berarti dalam membantu mereka bertahan dan memulai kembali hidup mereka.',
                    'Adela Nanda Violita',
                    30,
                    'Rp. 1.000.526,00',
                    '20 hari',
                    '{{ asset('image/poster2.jpeg') }}')">Lihat Detail</a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster3.jpg') }}" alt="poster3">
                <div class="card-body">
                    <h5 class="card-title">Luka Palestina adalah Luka Kita Semua</h5>
                    <p class="card-text">Tasya Regiana</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.211.620,00</p>
                    <p>Sisa: 25 hari</p>
                    <a href="#" class="btn btn-primary" onclick="showDetail(
                            'Ketika saudara kita di Palestina menderita, kita semua merasakan sakitnya. Solidaritas dan kepedulian kita adalah kunci dalam memberikan dukungan moral dan material yang mereka butuhkan. Luka yang mereka alami adalah luka kita semua, dan dengan bersatu, kita dapat memberikan bantuan yang sangat dibutuhkan. Donasi Anda dapat menyediakan makanan, obat-obatan, dan kebutuhan sehari-hari lainnya yang vital bagi mereka yang sedang berjuang.',
                            'Tasya Regiana',
                            40,
                            'Rp. 1.211.620,00',
                            '25 hari',
                            '{{ asset('image/poster3.jpg') }}')">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster1.jpeg') }}" alt="poster1">
                <div class="card-body">
                    <h5 class="card-title">Pendidikan Anak</h5>
                    <p class="card-text">Muhamad Alvin</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <p>Terkumpul: Rp. 10.050.710,00</p>
                    <p>Sisa: 11 hari</p>
                    <a href="#" class="btn btn-primary" onclick="showDetail(
                            'Anak-anak adalah harapan masa depan kita. Namun, banyak anak di Palestina yang terpaksa putus sekolah karena konflik. Pendidikan adalah hak dasar setiap anak, dan melalui donasi Anda, kita dapat membantu memastikan bahwa anak-anak di Palestina mendapatkan kesempatan untuk belajar dan tumbuh. Dukungan Anda dapat menyediakan beasiswa, mendanai pembangunan sekolah, dan memastikan guru-guru dapat terus mengajar meskipun dalam kondisi sulit.',
                            'Muhamad Alvin',
                            90,
                            'Rp. 10.050.710,00',
                            '11 hari',
                            '{{ asset('image/poster1.jpeg') }}')">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster5.png') }}" alt="poster5">
                <div class="card-body">
                    <h5 class="card-title">Donasi Perlengkapan dan Peralatan Sekolah</h5>
                    <p class="card-text ">Galuh Shoutika</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.511.620,00</p>
                    <p>Sisa: 31 hari</p>
                    <a href="#" class="btn btn-primary" onclick="showDetail(
                            'Perlengkapan sekolah seperti buku, alat tulis, seragam, dan peralatan lainnya adalah hal-hal dasar yang dibutuhkan oleh anak-anak untuk belajar dengan baik. Namun, banyak anak di Palestina yang kekurangan perlengkapan ini. Donasi Anda dapat membantu menyediakan segala yang mereka butuhkan untuk pendidikan yang layak. Bersama kita dapat memberikan mereka alat untuk meraih masa depan yang lebih baik dan memutus siklus kemiskinan.',
                            'Galuh Shoutika',
                            50,
                            'Rp. 1.511.620,00',
                            '28 hari',
                            '{{ asset('image/poster5.png') }}')">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('image/poster4.png') }}" alt="poster4">
                <div class="card-body">
                    <h5 class="card-title">Sedekah Yatim</h5>
                    <p class="card-text">Eva Nurrahma</p>
                    <div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <p>Terkumpul: Rp. 1.711.620,00</p>
                    <p>Sisa: 20 hari</p>
                    <a href="#" class="btn btn-success" onclick="showDetail(
                            'Anak-anak yatim di Palestina menghadapi tantangan yang luar biasa. Kehilangan orang tua mereka dalam konflik membuat mereka rentan dan membutuhkan perhatian khusus. Sedekah Anda dapat memberikan mereka kebutuhan dasar, seperti makanan, pakaian, dan tempat tinggal yang aman. Selain itu, sedekah juga bisa membantu mereka mendapatkan dukungan psikologis dan pendidikan yang sangat mereka butuhkan. Mari bersama-sama memberikan cinta dan harapan bagi anak-anak yatim di Palestina.',
                            'Eva Nurrahma',
                            50,
                            'Rp. 1.711.620,00',
                            '20 hari',
                            '{{ asset('image/poster4.png') }}')">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Donasi -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Donasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modalImage" class="img-fluid mb-3" src="" alt="Donasi Image">
                <h5 id="modalTitle"></h5>
                <p id="modalText"></p>
                <div id="modalProgress" class="progress mb-3">
                    <div id="modalProgressBar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
                <p id="modalAmount"></p>
                <p id="modalDaysLeft"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="modalLink" href="#" class="btn btn-success">Salurkan Donasi</a>
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

<!-- Script for Modal -->
<script>
    function showDetail(title, author, progress, amount, daysLeft, imageUrl) {
        // Set modal content
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalText').textContent = 'Author: ' + author;
        document.getElementById('modalProgressBar').style.width = progress + '%';
        document.getElementById('modalProgressBar').textContent = progress + '%';
        document.getElementById('modalAmount').textContent = 'Terkumpul: ' + amount;
        document.getElementById('modalDaysLeft').textContent = 'Sisa: ' + daysLeft;
        document.getElementById('modalImage').src = imageUrl;

        // Modify modal link
        var modalLink = document.getElementById('modalLink');
        modalLink.href = "{{ route('daftar.index') }}" // Set your donation link here

        // Show the modal
        $('#detailModal').modal('show');
    }
</script>

</body>
</html>

