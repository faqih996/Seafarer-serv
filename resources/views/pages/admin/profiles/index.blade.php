@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Applicant Database</h2>
            <p class="dashboard-subtitle">
                List of Apllicant
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('profiles.create') }}" class="mb-3 btn btn-primary">
                                {{-- {{  route('position.create') }} --}}
                                + Add Applicant
                            </a>

                            <a
                            {{-- href="{{ route('profiles.export') }}" --}}
                                class="mb-3 text-right btn btn-success"
                            >
                                Export
                            </a>

                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Whatsapp Number</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                { data: 'photos', name: 'photos' },
                { data: 'users.first_name', name: 'users.first_name' },
                { data: 'users.last_name', name: 'users.last_name' },
                { data: 'gender', name: 'gender' },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'occupation', name: 'occupation' },

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
