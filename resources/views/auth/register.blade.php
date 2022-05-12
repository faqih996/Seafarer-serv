@extends('layouts.auth')

@section('content')
<div class="page-content page-auth" id="register">
    <div class="section-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center justify-content-center row-login">
                <div class="text-center col-lg-6">
                <img
                src="{{asset('/images/logoheader.png') }}"
                alt=""
                class="mb-3 w-50 mb-lg-none"
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
                                    <label>Confirm Password</label>
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
                                    class="mt-4 btn btn-primary btn-block 85"
                                    :disabled="this.email_unavailable"
                                >
                                    Sign Up
                                </button>
                                <a
                                    href="{{ route('login') }}"
                                    class="mt-3 btn btn-signup btn-block w-85"
                                >
                                    Sign In to My Account
                                </a>

                            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    <script src="vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();

        },
        methods: {
            checkForEmailAvailability: function () {
                var self = this;
                axios.get('{{ route('api-register-check') }}', {
                        params: {
                            email: this.email
                        }
                    })
                    .then(function (response) {
                        if(response.data == 'Available') {
                            self.$toasted.show(
                                "Email available! you can continue to next step!", {
                                    position: "top-center",
                                    className: "rounded",
                                    duration: 1000,
                                }
                            );
                            self.email_unavailable = false;
                        } else {
                            self.$toasted.error(
                                "Sorry, email already registered. use another email!", {
                                    position: "top-center",
                                    className: "rounded",
                                    duration: 1000,
                                }
                            );
                            self.email_unavailable = true;
                        }
                        // handle success
                        console.log(response.data);
                    })
            }
        },
        data() {
            return {
                first_name: "Jhon",
                last_name: "Doe",
                email: "new@sailor.id",
                email_unavailable: false
            }
        },
      });
    </script>

@endpush
