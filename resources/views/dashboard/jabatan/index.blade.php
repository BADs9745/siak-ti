    @extends('dashboard.layouts.main')
    @section('title')
    @section('navDosen', 'avtive')

    @section('content')
        <h1 class="mt-3">Daftar Dosen Jurusan TI</h1>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/dashboard-jabatan/create" class="btn btn-primary mb-3 mt-4">Tambah Data Jabatan</a>

        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Kode jabatan</th>
                <th>Nama Jabatan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($jabatans as $jabatan)
                <tr>
                    <td>{{ $jabatans->firstItem() + $loop->index }}</td>
                    <td>{{ $jabatan->kode_jabatan }}</td>
                    <td>{{ $jabatan->nama_jabatan }}</td>
                    <td>{{ $jabatan->keterangan }}</td>
                    {{-- <td>{{ $dosen->no_telp }}</td> --}}

                    {{-- <td>{{ $dosen->alamat }}</td> --}}
                    <td class="text-nowrap">
                        <a href="/dashboard-jabatan/{{ $jabatan->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        {{-- <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                        <form action="/dashboard-jabatan/{{ $jabatan->id }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('apakah anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $jabatans->links() }}
    @endsection
