@extends('dashboard.layouts.main')
@section('title')
@section('navprodi','avtive')

@section('content')
    <h1 class="mt-3">Daftar Prodi Jurusan TI</h1>
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard-prodi/create" class="btn btn-primary mb-3 mt-4">Tambah Data Prodi</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach ($prodis as $prodi)
        <tr>
            <td>{{ $prodis->firstItem()+$loop->index }}</td>
            <td>{{ $prodi->nama }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-prodi/{{ $prodi->id }}" class="btn btn-success btn-sm">Detail</a>
                <a href="/dashboard-prodi/{{ $prodi->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                <form action="/dashboard-prodi/{{ $prodi->id }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{ $prodis->links() }}
@endsection