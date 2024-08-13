@extends('dashboard.layouts.main')

@section('content')

<div class="row"> 
    <div>
        <h1 class="mt-3">Detail Data Mahasiswa</h1>
    </div>
    <table class="table mt-2">
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
        </tr><br>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
        </tr><br>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $mahasiswa->email }}</td>
        </tr><br>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>{{ $mahasiswa->prodi->nama }}</td>
        </tr><br>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr><br>
    </table>
</div>
    <div class="mt-4">
        <a href="/dashboard-mahasiswa/" class="btn btn-primary btn-md">Kembali</a>
    </div>
@endsection