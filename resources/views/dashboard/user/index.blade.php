@extends('dashboard.layouts.main')
@section('title')
@section('navUser','avtive')

@section('content')
    <h1 class="mt-3">Daftar User</h1>
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard-user/create" class="btn btn-primary mb-3 mt-4">Tambah Data User</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        {{--  <th>Alamat</th>--}}
        <th>Aksi</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $users->firstItem()+$loop->index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-user/{{ $user->id }}" class="btn btn-success btn-sm">Detail</a>
                <a href="/dashboard-user/{{ $user->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                {{--  <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                <form action="/dashboard-user/{{ $user->id }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{ $users->links() }}
@endsection