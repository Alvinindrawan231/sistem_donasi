<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar</title>
</head>
<body>
    <style>
.navbar {
    background-color: #d7ffd9; /* Warna latar belakang navbar */
}

.navbar .navbar-brand, .navbar-nav .nav-link {
    color: #004d40; /* Warna teks navbar */
    font-weight: bold;
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
<div class="card">
    <div class="card-header bg-success text-white">
       <center>Data Pendaftaran Donasi</center>
    </div>
    <div class="card-body">
        <p class="text-center">Teks deskripsi atau informasi lainnya di atas tabel.</p>
        <img src="/path/to/image.jpg" alt="Image" class="img-fluid mx-auto d-block" style="max-width: 400px;">
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mb-3">
            <div class="col-md-12 text-right">
                <a href="{{ route('daftar.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftars as $index => $daftar)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ Str::ucfirst($daftar->name) }}</td>
                            <td>{{ $daftar->email }}</td>
                            <td class="text-center">{{ $daftar->telephone }}</td>
                            <td>{{ $daftar->address }}</td>
                            <td>{{ $daftar->nominal }}</td>
                            <td>
                                <a href="{{ route('daftar.edit', $daftar->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                    {{ $daftars->links() }}
                </div>
            </div>
            <div class="col-md-3 border p-3 bg-light">
                <h5 class="font-weight-bold">Informasi Pendonasi</h5>
                <p class="mt-2">Jumlah Pendonasi: {{ $total }}</p>
            </div>
        </div>
    </div>
</div>
@endsection