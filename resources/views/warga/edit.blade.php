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
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">Edit Data</h1>
            <form action="/warga/{{$warga->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$warga->nama}}" required>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="text" class="form-control" name="nik" value="{{$warga->nik}}" required>
                </div>
                <div class="mb-3">
                    <label for="no_kk" class="form-label">No KK</label>
                    <input type="text" class="form-control" name="no_kk" value="{{$warga->no_kk}}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" cols="30" rows="5" required>{{$warga->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
