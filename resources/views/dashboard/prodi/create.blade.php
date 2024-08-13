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
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control @error('nama') is-invalid
            @enderror" value="{{ old('nama') }}" name="nama" aria-describedby="nama">
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