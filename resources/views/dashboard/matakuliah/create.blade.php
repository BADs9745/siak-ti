@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="mb-3 mt-3">
            <h2>Input Data Prodi</h2>
        </div>

        <div class="col-6">
            <form action="/dashboard-prodi" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode Matakuliah</label>
                    <input type="text" class="form-control @error('kode_mk') is-invalid
            @enderror"
                        value="{{ old('kode_mk') }}" name="kode_mk" aria-describedby="kode_mk">
                    @error('kode_mk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_mk" class="form-label">Nama Matakuliah</label>
                    <input type="text" class="form-control @error('nama_mk') is-invalid
            @enderror"
                        value="{{ old('nama_mk') }}" name="nama_mk" aria-describedby="nama_mk">
                    @error('nama_mk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="text" class="form-control @error('sks') is-invalid
            @enderror"
                        value="{{ old('sks') }}" name="sks" aria-describedby="sks">
                    @error('sks')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="semester" class="form-label">Nama Matakuliah</label>
                    <input type="text" class="form-control @error('semester') is-invalid
            @enderror"
                        value="{{ old('semester') }}" name="semester" aria-describedby="semester">
                    @error('semester')
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
