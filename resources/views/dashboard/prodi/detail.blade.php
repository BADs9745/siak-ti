@extends('dashboard.layouts.main')

@section('content')

<div class="row"> 
    <div>
        <h1 class="mt-3">Detail Data Prodi</h1>
    </div>
    <table class="table mt-2">
        <tr>
            <td>Nama Prodi</td>
            <td>:</td>
            <td>{{ $prodi->nama }}</td>
        </tr>
    </table>
</div>
    <div class="mt-4">
        <a href="/dashboard-prodi/" class="btn btn-primary btn-md">Kembali</a>
    </div>
@endsection