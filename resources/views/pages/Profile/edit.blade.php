@extends('layouts.dashboard')

@section('title')
User Settings
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">

            <div class="dashboard-heading">
                <h2 class="dashboard-title">Edit Profile</h2>
                <p class="dashboard-subtitle">
                Please Compleate Your Data Information
                </p>
            </div>

            <!-- personal information -->
            <div class="dashboard-content personal">
                <div class="row">

                    <div class="col-11">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('profile.update',  [Auth::user()->id]) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="card">
                                <div class="card-body">

                                    <h5>
                                        Personal Information
                                    </h5>

                                    <div class="dropdown-divider"></div>
                                    <div class="mb-2 row" id="locations">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="first_name"
                                                    aria-describedby="emailHelp"
                                                    name="first_name"
                                                    value="{{ $data_user->first_name ?? ' ' }}"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input
                                                    type="last_name"
                                                    class="form-control"
                                                    id="last_name"
                                                    aria-describedby="emailHelp"
                                                    name="last_name"
                                                    value="{{ $data_user->last_name ?? ' ' }}"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birth_place">Place of Birth</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="placeOfBirth"
                                                    aria-describedby="emailHelp"
                                                    name="birth_place"
                                                    value="{{ $data_user->detail_user->birth_place ?? ' ' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birth_date">Date Of Birth</label>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="dateOfBirth"
                                                    aria-describedby="dateHelp"
                                                    name="birth_date"
                                                    value="{{ $data_user->detail_user->birth_date ?? ' ' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" required class="form-control">
                                                    <option value="{{ $data_user->detail_user->gender }}">{{ $data_user->detail_user->gender }}</option>
                                                    <option value="Male" {{ $data_user->detail_user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ $data_user->detail_user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="marital">Marital Status</label>
                                                <select name="marital" required class="form-control">
                                                    <option value="Single" {{ $data_user->detail_user->marital == 'Single' ? 'selected' : '' }}>Single</option>
                                                    <option value="Married" {{ $data_user->detail_user->marital == 'Married' ? 'selected' : '' }}>Married</option>
                                                    <option value="Widowed" {{ $data_user->detail_user->marital == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                                    <option value="Divorced" {{ $data_user->detail_user->marital == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea name="about_me" id="editor"  value="{{ $data_user->detail_user->about_me ?? '' }}"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="occupation">Current Occupation</label>
                                                <select name="occupation" class="form-control" required>
                                                    <option value="Student" {{ $data_user->detail_user->occupation == 'Student' ? 'selected' : '' }} >Student</option>
                                                    <option value="Scholar" {{ $data_user->detail_user->occupation == 'Scholar' ? 'selected' : '' }}>Scholar</option>
                                                    <option value="Freelancer" {{ $data_user->detail_user->occupation == 'Freelancer' ? 'selected' : '' }}>Freelancer</option>
                                                    <option value="Bussinesman" {{ $data_user->detail_user->occupation == 'Bussinesman' ? 'selected' : '' }}>Bussinesman</option>
                                                    <option value="Worker" {{ $data_user->detail_user->occupation == 'Worker' ? 'selected' : '' }}>Worker</option>
                                                    <option value="Hotel Employee" {{ $data_user->detail_user->occupation == 'Hotel Employee' ? 'selected' : '' }}>Hotel/Restaurant Employee</option>
                                                    <option value="Cruise Ship Crew" {{ $data_user->detail_user->occupation == 'Cruise Ship Crew' ? 'selected' : '' }}>Cruiseship Crew</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="email"
                                                    aria-describedby="emailHelp"
                                                    name="email"
                                                    value="{{ $data_user->detail_user->email ?? '' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="skype">Skype Id</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="skype"
                                                    aria-describedby="emailHelp"
                                                    name="skype"
                                                    value="{{ $data_user->detail_user->skype ?? '' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone_number">Mobile Number</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    id="phone_number"
                                                    aria-describedby="emailHelp"
                                                    name="phone_number"
                                                    value="{{ $data_user->detail_user->phone_number ?? '' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="address"
                                                    aria-describedby="emailHelp"
                                                    name="address"
                                                    value="{{ $data_user->detail_user->address ?? '' }}"
                                                    required
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="provinces_id">Province</label>
                                                {{-- <input
                                                    type="text"
                                                    class="form-control"
                                                    id="provinces_id"
                                                    aria-describedby="emailHelp"
                                                    name="provinces_id"
                                                    value="{{ $data_user->detail_user->provinces_id ?? '' }}"
                                                    required
                                                /> --}}
                                                <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces" required>
                                                    <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="regencies_id">City</label>
                                                    {{-- <input
                                                        type="text"
                                                        class="form-control"
                                                        id="regencies_id"
                                                        aria-describedby="emailHelp"
                                                        name="regencies_id"
                                                        value="{{ $data_user->detail_user->regencies_id}}"
                                                        required
                                                    /> --}}
                                                <select name="regencies_id" id="regencies_id" class="form-control " v-model="regencies_id" v-if="regencies" required>
                                                    <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="zip_code">Postal Code</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="zip_code"
                                                    name="zip_code"
                                                    value="{{ $data_user->detail_user->zip_code}}"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="country"
                                                    name="country"
                                                    value="Indonesia"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="text-right col">
                                            <button
                                            type="submit"
                                            class="px-5 btn btn-success"
                                            >
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
            <!-- end personal information -->
        </div>
    </div>
@endsection

@push('addon-script')

    {{-- Package CK Editor --}}
    <script src="{{ url('https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    {{-- end Package CK editor --}}

    {{-- API Location with VUE JS --}}
    <script src="{{ url('vendor/vue/vue.js') }}"></script>
    <script src="{{ url('https://unpkg.com/vue-toasted') }}"></script>
    <script src="{{ url('https://unpkg.com/axios/dist/axios.min.js') }}"></script>
    <script>
        var locations = new Vue({
            el: "#locations",
            mounted() {
                this.getProvincesData();
            },
            data: {
                provinces: null,
                regencies: null,
                provinces_id: null,
                regencies_id: null,
            },
            methods: {
                getProvincesData() {
                var self = this;
                axios.get('{{ route('api-provinces') }}')
                    .then(function (response) {
                        self.provinces = response.data;
                    })
                },
                getRegenciesData() {
                var self = this;
                axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                    .then(function (response) {
                        self.regencies = response.data;
                    })
                },
            },
            watch: {
                provinces_id: function (val, oldVal) {
                this.regencies_id = null;
                this.getRegenciesData();
                },
            }
        });
    </script>
    {{-- End API Location with VUE JS--}}

@endpush
