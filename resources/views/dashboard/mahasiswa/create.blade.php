@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="mb-3 mt-3">
        <h2>Input Data Mahasiswa</h2>
    </div>
    
    <div class="col-6">
    <form action="/dashboard-mahasiswa" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid
            @enderror" value="{{ old('nim') }}" name="nim" aria-describedby="nim">
            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_lengkap') is-invalid
            @enderror" value="{{ old('nama_lengkap') }}" name="nama_lengkap" aria-describedby="nama_lengkap">
            @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid
            @enderror" value="{{ old('tempat_lahir') }}" name="tempat_lahir" aria-describedby="tempat_lahir">
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div  class="row mb-3">
            <div>
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl_lahir') is-invalid
            @enderror" value="{{ old('tgl_lahir') }}" name="tgl_lahir" aria-describedby="tgl_lahir">
            @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid
            @enderror" value="{{ old('email') }}" name="email" aria-describedby="emailHelp">
            @error('email')
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