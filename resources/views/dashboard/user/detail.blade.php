@extends('dashboard.layouts.main')

@section('content')

<div class="row"> 
    <div>
        <h1 class="mt-3">Detail Data User</h1>
    </div>
    <table class="table mt-2">
        <tr>
            <td>id</td>
            <td>:</td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Email Verified</td>
            <td>:</td>
            <td>{{ $user->email_verified_at }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>{{ $user->password }}</td>
        </tr>
        <tr>
            <td>Remember Token</td>
            <td>:</td>
            <td>{{ $user->remember_token }}</td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>:</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>:</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
    </table>
</div>
    <div class="mt-4">
        <a href="/dashboard-user/" class="btn btn-primary btn-md">Kembali</a>
    </div>
@endsection
