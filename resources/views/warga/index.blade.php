@extends('layouts.master')

@section('content')

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
    <div class="container">
        <a class="navbar-brand" href="/" style="font-size: 24px;">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/warga/create" style="font-size: 18px;">Daftar Warga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/warga" style="font-size: 18px;">Hasil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- End Navbar --}}

<div class="container mt-4">
    <a class="btn btn-primary mb-3" href="/warga/create">Add Warga</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No KK</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warga as $index => $w)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$w->nama}}</td>
                    <td>{{$w->nik}}</td>
                    <td>{{$w->no_kk}}</td>
                    <td>{{$w->alamat}}</td>
                    <td>
                        <a href="/warga/{{$w->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form action="/warga/{{$w->id}}" method="POST" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
