@extends('layouts.admin')

@section('title')
  User Settings
@endsection

@section('content')
<!-- Section Content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Edit Profile</h2>
        <p class="dashboard-subtitle">
          Please Compleate Your Data Information
        </p>
      </div>

      <!-- educational -->
      <div class="dashboard-content education">
        <div class="row">
          <div class="col-11">
            <form action="{{ route('education.update', $education->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div class="card">
                <div class="card-body">
                  <h5>
                    Education Background
                  </h5>
                  <div class="dropdown-divider"></div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="institution_name">Institution Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          aria-describedby="emailHelp"
                          name="name"
                          value="{{ $education->name }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="course">Course Study</label>
                        <input
                          type="course"
                          class="form-control"
                          id="course"
                          aria-describedby="emailHelp"
                          name="course"
                          value="{{ $education->course }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="addressOne">From</label>
                        <input
                          type="date"
                          class="form-control"
                          id="start"
                          aria-describedby="emailHelp"
                          name="start"
                          value="{{ $education->start }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="graduate">To</label>
                        <input
                          type="date"
                          class="form-control"
                          id="graduate"
                          aria-describedby="emailHelp"
                          name="graduate"
                          value="{{ $education->graduate }}"
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
                          value="{{ $education->address }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="province">Province</label>
                        {{-- <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select> --}}
                        <input
                          type="text"
                          class="form-control"
                          id="provinces_id"
                          aria-describedby="emailHelp"
                          name="provinces_id"
                          value="{{ $education->provinces_id }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        {{-- <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                          <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                        </select> --}}
                        <input
                          type="text"
                          class="form-control"
                          id="regencies_id"
                          aria-describedby="emailHelp"
                          name="regencies_id"
                          value="{{ $education->regencies_id }}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                          type="text"
                          class="form-control"
                          id="zip_code"
                          name="zip_code"
                          value="{{ $education->zip_code}}"
                          required
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
                          value="{{ $education->country}}"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Education Certificate</label>
                          <input type="file" class="form-control" name="certificate" placeholder="certificate" />
                        </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-12">
                      <button
                        class="btn btn-secondary btn-block"
                      >
                        Add Education
                      </button>
                    </div>
                    <div class="col text-left mt-4">
                        <p class="dashboard-subtitle text-danger">
                          Don't forget to click SAVE after each section!
                        </p>
                      </div>
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5 mt-4"
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
      <!-- end of educational -->

  </div>
</div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor' );
  </script>
@endpush
