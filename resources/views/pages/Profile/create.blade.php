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
        <h2 class="dashboard-title">My Profile</h2>
        <p class="dashboard-subtitle">
          Please Compleate Your Data Information
        </p>
      </div>

      <!-- personal information -->
      <div class="dashboard-content personal">
        <div class="row">
          <div class="col-11">
            <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="card">
                <div class="card-body">
                  <h5>
                    Personal Information
                  </h5>
                  <div class="dropdown-divider"></div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="first_name"
                          aria-describedby="emailHelp"
                          name="first_name"
                          value="your first name"
                          required
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
                          value="your last name"
                          required
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
                          value="London"
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
                          value=""
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea name="about_me" id="editor" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="occupation">Current Occupation</label>
                        <select name="occupation" class="form-control" required>
                          {{-- <option value="{{ $item->transaction_status }}">{{ $item->transaction_status }}</option> --}}
                          <option value="Student">Student</option>
                          <option value="Scholar">Scholar</option>
                          <option value="Freelancer">Freelancer</option>
                          <option value="Freelancer">Bussinesman</option>
                          <option value="Employee">Hotel/Restaurant Employee</option>
                          <option value="Employee">Cruiseship Crew</option>
                          <option value="Employee">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="addressOne">Email</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          aria-describedby="emailHelp"
                          name="addressOne"
                          value="your valid email"
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
                          value="Rejoiner"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone_number">Mobile Number</label>
                        <input
                          type="text"
                          class="form-control"
                          id="phone_number"
                          aria-describedby="emailHelp"
                          name="phone_number"
                          value="Mobile number"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="addressOne">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          id="addressOne"
                          aria-describedby="emailHelp"
                          name="addressOne"
                          value="your address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="province">Province</label>
                        <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces" required>
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="regencies_id">City</label>
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
                          value="40512"
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
                    <div class="col text-left">
                      <p class="dashboard-subtitle">
                        Don't forget to click SAVE after each section!
                      </p>
                    </div>
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5"
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

      <!-- educational experience -->
      <div class="dashboard-content education">
        <div class="row">
          <div class="col-11">
            <form action="{{ route('education.store') }}" method="post" enctype="multipart/form-data">
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
                          value="Your School/Institution Name"
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
                          value=""
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
                          value=""
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
                          value=""
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
                          value=""
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="province">Province</label>
                        <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                          <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                          type="text"
                          class="form-control"
                          id="postalCode"
                          name="postalCode"
                          value="40512"
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
                          value="Indonesia"
                          required
                        />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col text-left">
                      <p class="dashboard-subtitle">
                        Don't forget to click SAVE after each section!
                      </p>
                    </div>
                    <div class="col-md-12">
                      <button
                        class="btn btn-secondary btn-block"
                      >
                        Add Education
                      </button>
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
      <!-- end of educational experience -->

      <!-- educational experience -->
      <div class="dashboard-content experience">
        <div class="row">
          <div class="col-11">
            <form action="">
              <div class="card">
                <div class="card-body">
                  <h5>
                    Work Experience
                  </h5>
                  <div class="dropdown-divider"></div>
                  <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Institution Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          aria-describedby="emailHelp"
                          name="name"
                          value="Your Work Experience"
                        />
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label for="base">Work Base</label>
                        <input
                          type="base"
                          class="form-control"
                          id="base"
                          aria-describedby="emailHelp"
                          name="base"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label for="position">Position</label>
                        <input
                          type="position"
                          class="form-control"
                          id="position"
                          aria-describedby="emailHelp"
                          name="position"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input
                          type="job_title"
                          class="form-control"
                          id="job_title"
                          aria-describedby="emailHelp"
                          name="job_title"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="start">From</label>
                        <input
                          type="date"
                          class="form-control"
                          id="start"
                          aria-describedby="emailHelp"
                          name="start"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="graduate">To</label>
                        <input
                          type="date"
                          class="form-control"
                          id="graduate"
                          aria-describedby="emailHelp"
                          name="graduate"
                          value="Rejoiner"
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
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="province">Province</label>
                        <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                          <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                          type="text"
                          class="form-control"
                          id="postalCode"
                          name="postalCode"
                          value="40512"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="spv_name">Supervisor Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="spv_name"
                          name="spv_name"
                          value="Supervisor Name"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="institution_phone">Telephone</label>
                        <input
                          type="text"
                          class="form-control"
                          id="institution_phone"
                          name="institution_phone"
                          value="+62 08xxxxxxxxxx"
                        />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="country">Describe your duties</label>
                        <input
                          type="text"
                          class="form-control"
                          id="country"
                          name="country"
                          value=""
                        />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <button
                        class="btn btn-secondary btn-block"
                      >
                        Add Experience
                      </button>
                    </div>
                    <div class="col text-right">
                      <button
                        type="submit"
                        class="btn btn-success px-5 mt-3"
                      >
                        Save Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end of educational experience -->
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor' );
  </script>
@endpush