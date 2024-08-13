@extends('layouts.main')
@section('title','Data Dosen')
@section('navProdi','avtive')

@section('content')
<h1>Datar Prodi</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
    </tr>
    @foreach ($prodis as $prodi)
        <tr>
            <td>{{ $prodi->id }}</td>
            <td>{{ $prodi->nama }}</td>
        </tr>
    @endforeach
</table>
{{ $prodis->links() }}
@endsection