@extends('layouts.dashboard')

@section('title')
    My Profile
@endsection

@section('content')

    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Profile</h2>
                <p class="dashboard-subtitle">
                    Current Personal Informations
                </p>
            </div>

            <div class="dashboard-content " id="profileDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-4">
                                        @if (auth()->user()->detail_user()->first()->photo != NULL)
                                            <img src="{{ url(Storage::url(auth()->user()->detail_user()->first()->photo)) }}" alt="profile photo"
                                                srcset="" class="w-16 h-16 rounded-full">
                                        @else
                                            <span class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                <svg class="inline mr-3 text-gray-300 rounded-full w-9 h-9" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                            </span>
                                        @endif

                                        <div class="col-12 col-md-4" >
                                            <a>Edit Photo</a>
                                            <a>Delete Photo</a>
                                        </div>

                                        <div class="col-12 col-md-4" >
                                            CV
                                            <a>Upload CV</a>
                                            <a>Delete</a>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="row">


                                            <div class="col-12 col-md-6">
                                                <div class="product-title">First Name</div>
                                                <div class="product-subtitle">{{ $user->first_name ?? ' ' }}</div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Last Name</div>
                                                <div class="product-subtitle">
                                                    {{ $user->last_name ?? ' ' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Email</div>
                                                <div class="product-subtitle"> {{ $user->email ?? ' ' }}</div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Mobile</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->phone_number ?? ' ' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Skype
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->skype ?? ' ' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Position</div>
                                                <div class="product-subtitle text-danger">
                                                    {{ $user->detail_user->position ?? ' ' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <d class="product-title">Status</div>
                                                <div class="product-subtitle"> {{ $user->detail_user->status ?? ' ' }}</div>
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
                                    <div class="mt-4 col-12">
                                        <h5>
                                            Personal Information
                                        </h5>
                                        <div class="row">

                                            <div class="col-6 col-md-6">
                                                <div class="product-title">Gender</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->gender ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-6">
                                                <div class="product-title">Marital Status</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->marital ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-6">
                                                <div class="product-title">Place of Birth</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->birth_place ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-6">
                                                <div class="product-title">Date of Birth</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->birth_date ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-6">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->address ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Province
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ App\Models\Province::find($user->detail_user->provinces_id)->name ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                    {{ App\Models\Regency::find($user->detail_user->regencies_id)->name ?? '' }}
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">{{ $user->detail_user->zip_code ?? '' }}</div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                    {{ $user->detail_user->country ?? '' }}
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
            <div class="mt-3 dashboard-content" id="educationDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-4 col-12">
                                        <h5>
                                            Education Background
                                        </h5>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            @forelse ($education_user as $key => $education)
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Institution Name</div>
                                                <div class="product-subtitle">
                                                    {{ $education->name ?? '' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Courses</div>
                                                <div class="product-subtitle">
                                                    {{$education->course ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Start Date</div>
                                                <div class="product-subtitle">
                                                    {{$education->start ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">End Date</div>
                                                <div class="product-subtitle">
                                                    {{ $education->graduate ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <div class="product-title">Address</div>
                                                <div class="product-subtitle">
                                                    {{ $education->address ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">City</div>
                                                <div class="product-subtitle">
                                                    {{ $education->regencies ?? '' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Province
                                                </div>
                                                <div class="product-subtitle">
                                                    {{ $education->provinces ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Postal Code</div>
                                                <div class="product-subtitle">{{$education->zip_code ?? ' ' }}</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Country</div>
                                                <div class="product-subtitle">
                                                    {{ $education->country ?? ' ' }}
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            @empty
                                                <div class="col-12 col-md-12 text-align-center">
                                                    <div class="product-title align-self-center">No Data</div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience History -->
            <div class="mt-3 dashboard-content" id="experienceDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-4 col-12">
                                        <h5>
                                            Work Experience
                                        </h5>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            @forelse ($experience_user as $key => $experience)
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title"> Institution Name</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->name }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Base</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->base }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Position</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->position }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Job Title</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->job_title }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Start Date</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->start_of_contract }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">End Date</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->end_of_contract }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-12">
                                                    <div class="product-title">Address</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->address }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">City</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->regencies_id }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">
                                                        Province
                                                    </div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->provinces_id }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Postal Code</div>
                                                    <div class="product-subtitle">{{ $experience->zip_code }}</div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Country</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->country }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Supervisor Name</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->spv_name }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Phone Number</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->institution_phone }}
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-12">
                                                    <div class="product-title">Describe Your Duty</div>
                                                    <div class="product-subtitle">
                                                        {{ $experience->job_descriptions }}
                                                    </div>
                                                </div>

                                            @empty
                                                <div class="col-12 col-md-12 text-align-center">
                                                    <div class="product-title align-self-center">No Data</div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact Person -->
            <div class="mt-3 dashboard-content" id="emergencyDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-4 col-12">
                                        <h5>
                                            Emergency Contact Information
                                        </h5>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            @forelse ($emergency_user as $key => $emergency)
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Name</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->family_name }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Relation</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->relations }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="product-title">Address</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->address }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Phone Number</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->contact1 }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Phone Number 2</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->contact2 }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">City</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->regencies_id }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">
                                                        Province
                                                    </div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->provinces_id }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Postal Code</div>
                                                    <div class="product-subtitle">{{ $emergency->zip_code }}</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Country</div>
                                                    <div class="product-subtitle">
                                                        {{ $emergency->country }}
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 col-md-12 text-align-center">
                                                    <div class="product-title align-self-center">No Data</div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Document -->
            <div class="mt-3 dashboard-content" id="documentsDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-4 col-12">
                                        <h5>
                                            My Documents
                                        </h5>
                                        <div class="dropdown-divider"></div>
                                        <div class="row">
                                            @forelse ($document_user as $key => $document)
                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">{{ $document->name }}</div>
                                                    <div class="product-subtitle">
                                                        {{ $document->docs_number }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Issued Place</div>
                                                    <div class="product-subtitle">
                                                        {{ $document->place_issued }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <div class="product-title">Issued Date</div>
                                                    <div class="product-subtitle">
                                                        {{ $document->issued_date }}
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Expired Date</div>
                                                    <div class="product-subtitle">
                                                        {{ $document->expired_date }}
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 col-md-12 text-align-center">
                                                    <div class="product-title align-self-center">No Data</div>
                                                </div>
                                            @endforelse
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
