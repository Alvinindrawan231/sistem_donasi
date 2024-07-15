@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="font-weight-bold m-0 w-100 text-center">DATA PENDAFTARAN DONASI</h5>
        <a href="{{ route('donasi') }}" class="btn btn-success back-button">Back</a>
    </div>

    <div class="card-body">
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
                <table class="table table-bordered">
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
            <div class="col-md-3 border p-3">
                <h5 class="font-weight-bold">Informasi Pendonasi</h5>
                <p class="mt-2">Jumlah Pendonasi: {{ $total }}</p>
            </div>
        </div>
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

.card-header .back-button {
    background-color: green;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.card-header .back-button:hover {
    background-color: darkgreen;
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
