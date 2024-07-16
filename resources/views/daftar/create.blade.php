@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    <div class="row">
            <div class="col">
                <h5 class="mb-0">
                    <center> Form Tambah Data Pendaftaran Donasi </center>
                </h5>
    </div>
    <div class="col-auto">
        <a href="{{ route('daftar.index') }}" class="btn btn-success">Back</a>
    </div>
</div>
</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('daftar.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="number" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" class="form-control" id="nominal" name="nominal" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<style>
/* Your custom CSS styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #bcf8dae4; /* Light green background color */
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #d7ffd9; /* Navbar background color */
}

.navbar .navbar-brand, .navbar-nav .nav-link {
    color: #004d40; /* Navbar text color */
    font-weight: bold;
}

.card-header {
    background-color: #d7ffd9; /* Card header background color */
    text-align: center;
}

.table {
    background-color: white; /* Table background color */
}

.table th, .table td {
    vertical-align: middle; /* Align table cells vertically */
}

.alert-success {
    background-color: #dff0d8; /* Success alert background color */
    color: #3c763d; /* Success alert text color */
    border-color: #d6e9c6; /* Success alert border color */
}

.btn-primary {
    background-color: #28a745;; /* Primary button background color */
    color: white; /* Primary button text color */
}

.btn-primary:hover {
    background-color: #218830; /* Primary button hover background color */
}

.btn-danger {
    background-color: #d9534f; /* Danger button background color */
    color: white; /* Danger button text color */
}

.btn-danger:hover {
    background-color: #c9302c; /* Danger button hover background color */
}

.border {
    border: 1px solid #dee2e6; /* Border color */
}

.font-weight-bold {
    font-weight: bold; /* Bold font weight */
}

.mt-2 {
    margin-top: 0.5rem; /* Margin top */
}

.text-center {
    text-align: center; /* Center align text */
}
</style>

@endsection
