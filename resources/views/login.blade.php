@extends('layouts.main')
@section('content')
    
    <div class="row justify-content-center">
        <div class="col-4">
            <main class="form-signin w-100 m-auto">
                <form method="POST" action="/login">
                    @csrf
                        <h1 class="h3 mb-3 fw-normal text-center mt-5">Please Login</h1>
                        <div class="form-floating mb-2 mt-4">
                            <input type="email" class="form-control @error('email') is-invalid
                            @enderror" id="floatingInput"  placeholder="name@example.com" name="email" value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <img src="{{ captcha_src() }}" alt="captcha">
                        <div class="mt-2"></div>
                        <input 
                            type="text" name="captcha" class="form-control mb-3 @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                            >
                        @error('captcha') 
                        <div class="invalid-feedback">{{ $message }}</div> @enderror 
                        <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                            </label>
                        </div>

                        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                        <h6 class="mt-2 text-center">Don't have an Account?<a href="/register "> Create Account</a></h6>
                        
                </form>
            </main>
        </div>
    </div>    

@endsection    