@extends('layouts.main')
@section('title')
@section('navMhs','avtive')

@section('content')
<h1>Datar Mahasiswa Jurusan TI</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswas->firstItem()+$loop->index }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->prodi->nama }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
    @endforeach
</table>
{{ $mahasiswas->links() }}
@endsection