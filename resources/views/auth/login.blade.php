@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
    <div class="section-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center row-login">
                <div class="text-center col-lg-6">
                    <img
                    src="{{ asset('/images/logoheader.png') }}"
                    alt=""
                    class="mb-4 w-50 mb-lg-none"
                    />
                </div>
                <div class="col-lg-6">
                    <h2>
                        Join Us Now, <br />
                        Find Your Best Dream Jobs
                    </h2>
                    <form method="POST" action="{{ route('login') }}" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control w-85 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control w-85 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @if (Route::has('password.request'))
                        <a class="align-self-end text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}</a>
                        @endif

                        <button
                            type="submit"
                            class="mt-4 btn btn-primary btn-block 85"
                        >
                            Sign In to My Account
                        </button>
                        <a
                            href="{{ route('register') }}"
                            class="mt-3 btn btn-signup btn-block w-85"
                        >
                            Sign Up
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
