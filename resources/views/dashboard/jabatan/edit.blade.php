@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="mb-3 mt-3">
            <h2>Edit Data Jabatan</h2>
        </div>

        <div class="col-6">
            <form action="/dashboard-jabatan/{{ $jabatans->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="nik" class="form-label">Kode Jabatan</label>
                    <input type="text" class="form-control @error('nik') is-invalid
            @enderror"
                        value="{{ old('nik', $jabatans->kode_jabatan) }}" name="kode_jabatan" aria-describedby="nik"
                        readonly>
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control @error('nama') is-invalid
            @enderror"
                        value="{{ old('nama', $jabatans->nama_jabatan) }}" name="nama_jabatan" aria-describedby="nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid
            @enderror" name="keterangan" rows="3">{{ old('keterangan', $jabatans->keterangan) }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
