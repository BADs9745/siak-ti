@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="mb-3 mt-3">
            <h2>Input Data Jabatan</h2>
        </div>

        <div class="col-6">
            <form action="/dashboard-jabatan" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                    <input type="text" class="form-control @error('kode_jabatan') is-invalid
            @enderror"
                        value="{{ old('kode_jabatan') }}" name="kode_jabatan" aria-describedby="kode_jabatan">
                    @error('kode_jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control @error('nama_jabatan') is-invalid
            @enderror"
                        value="{{ old('nama_jabatan') }}" name="nama_jabatan" aria-describedby="nama_jabatan">
                    @error('nama_jabatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid
            @enderror" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
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
