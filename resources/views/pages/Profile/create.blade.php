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
          Please Compleate Your Information
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
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <select name="gender" required class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="marital">Marital Status</label>
                          <select name="marital" required class="form-control">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="divorced">Divorced</option>
                        </select>
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea name="about_me" id="editor"></textarea>
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
                          type="number"
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
                        <label for="address">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          id="address"
                          aria-describedby="emailHelp"
                          name="address"
                          value="your address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="provinces_id">Province</label>
                        <input
                          type="text"
                          class="form-control"
                          id="provinces_id"
                          aria-describedby="emailHelp"
                          name="provinces_id"
                          value="your address"
                          required
                        />
                        {{-- <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces" required>
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="regencies_id">City</label>
                            <input
                              type="text"
                              class="form-control"
                              id="regencies_id"
                              aria-describedby="emailHelp"
                              name="regencies_id"
                              value="your address"
                              required
                            />
                        {{-- <select name="regencies_id" id="regencies_id" class="form-control " v-model="regencies_id" v-if="regencies" required>
                          <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                        </select> --}}
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
                          value="Post Code"
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
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Photo</label>
                          <input type="file" class="form-control" name="photos"   id="photos" placeholder="Photos" required />
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col text-left">
                      <p class="dashboard-subtitle text-danger">
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

      <!-- educational -->
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
                        {{-- <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select> --}}
                        <input
                          type="text"
                          class="form-control"
                          id="provinces_id"
                          aria-describedby="emailHelp"
                          name="provinces_id"
                          value=""
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
                          value=""
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
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Education Certificate</label>
                          <input type="file" class="form-control" name="certificate" placeholder="certificate" required />
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

      <!--experience -->
      <div class="dashboard-content experience">
        <div class="row">
          <div class="col-11">
            <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                        <select name="base" required class="form-control">
                            <option value="HotelBase">Land Base Hotel</option>
                            <option value="CruiseBase">Cruise Ship</option>
                        </select>
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
                        <label for="start_of_contract">Date Attendance From</label>
                        <input
                          type="date"
                          class="form-control"
                          id="start_of_contract"
                          aria-describedby="emailHelp"
                          name="start_of_contract"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="end_of_contract">Date Attendance To</label>
                        <input
                          type="date"
                          class="form-control"
                          id="end_of_contract"
                          aria-describedby="emailHelp"
                          name="end_of_contract"
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
                        <label for="provinces_id">Province</label>
                        <input
                          type="text"
                          class="form-control"
                          id="provinces_id"
                          aria-describedby="emailHelp"
                          name="provinces_id"
                          value=""
                        />
                        {{-- <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                          <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        <input
                          type="text"
                          class="form-control"
                          id="regencies_id"
                          aria-describedby="emailHelp"
                          name="regencies_id"
                          value=""
                        />
                        {{-- <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                          <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                        </select> --}}
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
                          value="08xxxxxxxxxx"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="job_descriptions">Describe your duties</label>
                        <input
                          type="text"
                          class="form-control"
                          id="job_descriptions"
                          name="job_descriptions"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="certificate">Work Certificate</label>
                          <input
                            type="file"
                            class="form-control"
                            id="certificate"
                            name="certificate"
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
                    <div class="col text-left mt-4">
                      <p class="dashboard-subtitle text-danger">
                        Don't forget to click SAVE after each section!
                      </p>
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
      <!-- end of  experience -->

            <!-- emergency -->
            <div class="dashboard-content emergency">
                <div class="row">
                  <div class="col-11">
                    <form action="{{ route('emergency.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="card">
                        <div class="card-body">
                          <h5>
                            Emergency Contact
                          </h5>
                          <div class="dropdown-divider"></div>
                          <div class="row mb-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="family_name">Family Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="family_name"
                                  aria-describedby="emailHelp"
                                  name="family_name"
                                  value=""
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="relations">Relation</label>
                                <select name="relations" required class="form-control">
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="brother">Brother</option>
                                    <option value="sister">Sister</option>
                                    <option value="uncle">Uncle</option>
                                    <option value="aunt">Aunt</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="contact1">Emergency Contact 1</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  id="contact1"
                                  aria-describedby="emailHelp"
                                  name="contact1"
                                  value=""
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="contact2">Emergency Contact 2</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  id="contact2"
                                  aria-describedby="emailHelp"
                                  name="contact2"
                                  value=""

                                />
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
                                  value=""
                                  required
                                />
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="address">Emergency Address</label>
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

                            <div class="col-md-6">
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
                                  value=""
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
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
                                  value=""
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="zip_code"
                                  name="zip_code"
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

                                <div class="col text-left mt-4">
                                  <p class="dashboard-subtitle text-danger">
                                    Don't forget to click SAVE after each section!
                                  </p>
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
                    </form>
                  </div>
                </div>
              </div>
              <!-- end of emergency contact -->
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
