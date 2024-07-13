<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
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

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang Di Website Donasi</h1>
        <p class="lead">Project aplikasi galang dana untuk membantu yang membutuhkan.</p>
        <hr class="my-4 bg-light">
        <p>Jadilah bagian dari perubahan dengan menyumbangkan donasi Anda sekarang.</p>
        <a class="btn btn-primary btn-lg mr-3" href="donasi" role="button">Donasi sekarang</a>
        <a class="btn btn-secondary btn-lg" href="home" role="button">Next</a>
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

@endsection

