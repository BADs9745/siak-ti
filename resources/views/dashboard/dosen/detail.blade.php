@extends('dashboard.layouts.main')

@section('content')

<div class="row"> 
    <div>
        <h1 class="mt-3">Detail Data Dosen</h1>
    </div>
    <table class="table mt-2">
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{ $dosen->nik }}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $dosen->nama }}</td>
        </tr><br>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $dosen->email }}</td>
        </tr><br>
        <tr>
            <td>Nomor telepon</td>
            <td>:</td>
            <td>{{ $dosen->no_telp }}</td>
        </tr><br>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $dosen->prodi->nama }}</td>
        </tr><br>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $dosen->alamat }}</td>
        </tr>
    </table>
</div>
    <div class="mt-4">
        <a href="/dashboard-dosen/" class="btn btn-primary btn-md">Kembali</a>
    </div>
@endsection