@extends('layouts.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/register">
                @csrf
                    <h1 class="h3 mb-3 fw-normal text-center mt-5">Please Create Account</h1>
                    <div class="form-floating mb-2 mt-4">
                        <input type="text" class="form-control" id="floatingInput" @error('name') is-invalid
                        @enderror placeholder="Input Name" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-2 mt-2">
                        <input type="email" class="form-control @error('email') is-invalid
                        @enderror" id="floatingInput"  placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control @error('password') is-invalid
                        @enderror" id="floatingPassword"  name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mb-2c">
                        <input type="password" class="form-control" id="floatingInput" placeholder="password confirm" name="password_confirmation" >
                        <label for="floatingInput">Password Confirm</label>
                    </div>
                    <img src="{{ captcha_src() }}" alt="captcha">
                    <div class="mt-2"></div>
                    <input 
                        type="text" name="captcha" class="form-control mb-3 @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                        >
                    @error('captcha') 
                    <div class="invalid-feedback">{{ $message }}</div> @enderror 
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>   
            </form>
        </main>
    </div>
</div> 




@endsection 