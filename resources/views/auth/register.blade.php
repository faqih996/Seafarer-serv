@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
    <div class="section-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center justify-content-center row-login">
                <div class="col-lg-6 text-center">
                <img
                src="images/sosslogo.png"
                alt=""
                class="w-50 mb-3 mb-lg-none"
                />
            </div>
                <div class="col-lg-6">
                    <h2>
                        Create Account
                    </h2>
                            <form class="mt-1" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input
                                        v-model="first_name"
                                        id="first_name"
                                        type="text"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        name="first_name"
                                        value="{{ old('first_name') }}"
                                        required
                                        autocomplete="first_name"
                                        autofocus
                                    >
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input
                                        v-model="last_name"
                                        id="last_name"
                                        type="text"
                                        class="form-control @error('last_name') is-invalid @enderror"
                                        name="last_name"
                                        value="{{ old('last_name') }}"
                                        required
                                        autocomplete="last_name"
                                        autofocus
                                    >
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input
                                        v-model="email"
                                        @change="checkForEmailAvailability()"
                                        id="email"
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        :class="{ 'is-invalid': this.email_unavailable }"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input
                                        id="password"
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    >
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    >
                                </div>


                                <button
                                    type="submit"
                                    class="btn btn-primary btn-block 85 mt-4"
                                >
                                    Sign Up
                                </button>
                                <a
                                    href="{{ route('login') }}"
                                    class="btn btn-signup btn-block w-85 mt-3"
                                >
                                    Sign In to My Account
                                </a>

                            </form>
            </div>
        </div>
    </div>
</div>
@endsection
