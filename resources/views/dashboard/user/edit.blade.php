@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="mb-3 mt-3">
            <h2>Edit Data User</h2>
        </div>

        <div class="col-6">
            <form action="/dashboard-user/{{ $user->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
            @enderror"
                        value="{{ old('name', $user->name) }}" name="name" aria-describedby="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid
            @enderror"
                        value="{{ old('email', $user->email) }}" name="email" aria-describedby="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Old Password</label>
                    <input type="text" class="form-control @error('password') is-invalid
            @enderror"
                        name="password" aria-describedby="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="text" class="form-control @error('password') is-invalid
            @enderror"
                        name="password" aria-describedby="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="text" class="form-control @error('password') is-invalid
            @enderror"
                        name="password" aria-describedby="password">
                    @error('password')
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
