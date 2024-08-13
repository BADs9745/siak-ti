@extends('dashboard.layouts.main')
@section('title')
@section('navMhs', 'avtive')

@section('content')
    <h1 class="mt-3">Daftar Mahasiswa Jurusan TI</h1>
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @can('IsAdmin')
        <a href="/dashboard-mahasiswa/create" class="btn btn-primary mb-3 mt-4">Tambah Data Mahasiswa</a>
    @endcan

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
            {{--  <th>Alamat</th> --}}
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswas->firstItem() + $loop->index }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama_lengkap }}</td>
                <td>{{ $mahasiswa->email }}</td>
                <td>{{ $mahasiswa->prodi->nama }}</td>
                {{-- <td>{{ $mahasiswa->alamat }}</td> --}}
                <td class="text-nowrap">
                    <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}" class="btn btn-success btn-sm">Detail</a>
                    <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    {{--  <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                    <form action="/dashboard-mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $mahasiswas->links() }}
    <a name="" id="" class="btn btn-primary" href="/topdf" role="button">Export to PDF</a>

@endsection
