@extends('layouts.dashboard')

@section('title')
    Admin Dashboard
@endsection

@section('content')

@if (count($detail_user))
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Profile</h2>
                <p class="dashboard-subtitle">
                    Current Personal Informations
                </p>
            </div>

            <div class="dashboard-content personal" id="profileDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        @if (auth()->user()->detail_user()->first()->photo != NULL)
                                            <img src="{{ url(Storage::url(auth()->user()->detail_user()->first()->photo)) }}" alt="photo profile"
                                                srcset="" class="w-16 h-16 rounded-full">
                                        @else
                                            <span class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                <svg class="inline w-9 h-9 mr-3 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">First Name</div>
                                                <div class="product-subtitle">{{ $user->first_name }}</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Last Name</div>
                                                <div class="product-subtitle">
                                                    {{ $user->last_name }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Position
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->occupation }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Status</div>
                                                <div class="product-subtitle text-danger">
                                                    statusas
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Email</div>
                                                <div class="product-subtitle"> {{ $user->email }}</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Mobile</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->phone_number }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="dashboard-content mt-3" id="personalDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>
                                            Personal Information
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Place of Birth</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->birth_place }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Date of Birth</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->birth_date }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                Setra Duta Cemara
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Occupation</div>
                                                <div class="product-subtitle">
                                                Blok B2 No. 34
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                Province
                                                </div>
                                                <div class="product-subtitle">
                                                West Java
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                Bandung
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">123999</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                Indonesia
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact Person -->
            <div class="dashboard-content mt-3" id="emergencyDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>
                                            Emergency Contact Information
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Name</div>
                                                <div class="product-subtitle">
                                                    Surya
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Siblings</div>
                                                <div class="product-subtitle">
                                                    Father
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloremque cumque nisi exercitationem corporis illo veniam fuga obcaecati omnis voluptates quaerat reprehenderit illum sapiente, officia facilis expedita, nam aut ipsam.
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Phone Number</div>
                                                <div class="product-subtitle">
                                                    +62 013792348912
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Phone Number 2</div>
                                                <div class="product-subtitle">
                                                    +62 013792348913
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                    Bandung
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Province
                                                </div>
                                                <div class="product-subtitle">
                                                    West Java
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">123999</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                    Indonesia
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education History -->
            <div class="dashboard-content mt-3" id="educationDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>
                                            Education Background
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Institution Name</div>
                                                <div class="product-subtitle">
                                                    Seaeducation
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Courses</div>
                                                <div class="product-subtitle">
                                                    Food And Beverage Services
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Start Date</div>
                                                <div class="product-subtitle">
                                                    17 December 2019
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">End Date</div>
                                                <div class="product-subtitle">
                                                    17 July 2020
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloremque cumque nisi exercitationem corporis illo veniam fuga obcaecati omnis voluptates quaerat reprehenderit illum sapiente, officia facilis expedita, nam aut ipsam.
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                    Bandung
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Province
                                                </div>
                                                <div class="product-subtitle">
                                                    West Java
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">123999</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                    Indonesia
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience History -->
            <div class="dashboard-content mt-3" id="experienceDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>
                                            Work Experience
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Institution Name</div>
                                                <div class="product-subtitle">
                                                    Le Meredien Hotel
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Position</div>
                                                <div class="product-subtitle">
                                                    Food And Beverage Services
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Start Date</div>
                                                <div class="product-subtitle">
                                                    17 December 2019
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">End Date</div>
                                                <div class="product-subtitle">
                                                    17 July 2020
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloremque cumque nisi exercitationem corporis illo veniam fuga obcaecati omnis voluptates quaerat reprehenderit illum sapiente, officia facilis expedita, nam aut ipsam.
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                    Bandung
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">
                                                    Province
                                                </div>
                                                <div class="product-subtitle">
                                                    West Java
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">123999</div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                    Indonesia
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Supervisor Name</div>
                                                <div class="product-subtitle">
                                                    Michael Jackson
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Phone Number</div>
                                                <div class="product-subtitle">
                                                    +62 912092123
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Duties</div>
                                                <div class="product-subtitle">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloremque cumque nisi exercitationem corporis illo veniam fuga obcaecati omnis voluptates quaerat reprehenderit illum sapiente, officia facilis expedita, nam aut ipsam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Document -->
            <div class="dashboard-content mt-3" id="documentsDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>
                                            My Documents
                                        </h5>
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Passport Number</div>
                                                <div class="product-subtitle">
                                                    C345234
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Issued Date</div>
                                                <div class="product-subtitle">
                                                    12 December 2019
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Expired Date</div>
                                                <div class="product-subtitle">
                                                    17 December 2024
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Seaman Book</div>
                                                <div class="product-subtitle">
                                                    B12734
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Issued Date</div>
                                                <div class="product-subtitle">
                                                    12 December 2020
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Expired Date</div>
                                                <div class="product-subtitle">
                                                    12 December 2025
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">
                                                    Basic Safety Training
                                                </div>
                                                <div class="product-subtitle">
                                                    909182348236282
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Issued Date</div>
                                                <div class="product-subtitle">12 November 2020</div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title">Expired Date</div>
                                                <div class="product-subtitle">
                                                    12 December 2025
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Content -->
@else
    {{ route('dashboard.profile.create') }}
@endif

@endsection


@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'slug', name: 'slug' },
                { data: 'departments.name', name: 'departments.name' },
                // { data: 'photo', name: 'photo' },
                { data: 'status', name: 'status' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush
