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
        <a href="/dashboard-dosen/create" class="btn btn-primary mb-3 mt-4">Tambah Data Dosen</a>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Email</th>
                {{-- <th>Telepon</th> --}}
                <th>Prodi</th>
                <th>Kode Jabatan</th>
                <th>Nama Jabatan</th>
                {{-- <th>Alamat</th> --}}
                <th>Aksi</th>
            </tr>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosens->firstItem() + $loop->index }}</td>
                    <td>{{ $dosen->nik }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                    {{-- <td>{{ $dosen->no_telp }}</td> --}}
                    <td>{{ $dosen->prodi->nama }}</td>
                    <td>{{ $dosen->jabatan->kode_jabatan }}</td>
                    <td>{{ $dosen->jabatan->nama_jabatan }}</td>
                    {{-- <td>{{ $dosen->alamat }}</td> --}}
                    <td class="text-nowrap">
                        <a href="/dashboard-dosen/{{ $dosen->id }}" class="btn btn-success btn-sm">Detail</a>
                        <a href="/dashboard-dosen/{{ $dosen->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        {{-- <a href="" class="btn btn-danger btn-sm">Hapus</a> --}}
                        <form action="/dashboard-dosen/{{ $dosen->id }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('apakah anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $dosens->links() }}
    @endsection
