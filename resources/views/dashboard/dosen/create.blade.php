@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="mb-3 mt-3">
        <h2>Input Data Dosen</h2>
    </div>
    
    <div class="col-6">
    <form action="/dashboard-dosen" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid
            @enderror" value="{{ old('nik') }}" name="nik" aria-describedby="nik">
            @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid
            @enderror" value="{{ old('nama') }}" name="nama" aria-describedby="nama">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid
            @enderror" value="{{ old('email') }}" name="email" aria-describedby="email">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('no_telp') is-invalid
            @enderror" value="{{ old('no_telp') }}" name="no_telp" aria-describedby="no_telp">
            @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <select name="prodi_id" class="form-select" required>
                <option value="">--Pilih Prodi--</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid
            @enderror" name="alamat" rows="3">{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
    </div>
</div>
@endsection