@extends('dashboard.layouts.main')
@section('title')
@section('navmatkul', 'avtive')

@section('content')
    <h1 class="mt-3">Daftar Matakuliah Jurusan TI</h1>
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard-matkul/create" class="btn btn-primary mb-3 mt-4">Tambah Data Matakuliah</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($matakuliahs as $matkul)
            <tr>
                <td>{{ $matakuliahs->firstItem() + $loop->index }}</td>
                <td>{{ $matkul->kode_mk }}</td>
                <td>{{ $matkul->nama_mk }}</td>
                <td>{{ $matkul->sks }}</td>
                <td>{{ $matkul->semester }}</td>
                <td class="text-nowrap">
                    <a href="/dashboard-matkul/{{ $matkul->id }}" class="btn btn-success btn-sm">Detail</a>
                    <a href="/dashboard-matkul/{{ $matkul->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    {{--  <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                    <form action="/dashboard-matkul/{{ $matkul->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $matakuliahs->links() }}
@endsection
