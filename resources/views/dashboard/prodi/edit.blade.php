@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="mb-3 mt-3">
        <h2>Edit Data Prodi</h2>
    </div>
    
    <div class="col-6">
    <form action="/dashboard-prodi/{{ $prodi->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control @error('nama') is-invalid
            @enderror" value="{{ old('nama',$prodi->nama) }}" name="nama" aria-describedby="nama">
            @error('nama')
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