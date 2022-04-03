@extends('layouts.admin')

@section('title')
  User Settings
@endsection

@section('content')
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
                            <img
                              src="images/LMjkt@2x.png"
                              alt=""
                              class="mb-3 w-80"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">First Name</div>
                                <div class="product-subtitle">Faqihuddin</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Last Name</div>
                                <div class="product-subtitle">
                                  Syakir
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Position
                                </div>
                                <div class="product-subtitle">
                                  Galley Steward
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Status</div>
                                <div class="product-subtitle text-danger">
                                  {{ status }}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Work</div>
                                <div class="product-subtitle">Star Aquarius Cruise</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle">
                                  +628 2020 11111
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
              <div class="mt-3 dashboard-content" id="personalDetails">
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
                              <div class="col-12 col-md-6">
                                <div class="product-title">Place of Birth</div>
                                <div class="product-subtitle">
                                  Cirebon
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Date of Birth</div>
                                <div class="product-subtitle">
                                  12 Maret 1997
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address</div>
                                <div class="product-subtitle">
                                  Setra Duta Cemara
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Email</div>
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


                              <!-- <div class="col-12">
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="product-title">Status</div>
                                    <select
                                      name="status"
                                      id="status"
                                      class="form-control"
                                      v-model="status"
                                    >
                                      <option value="UNPAID">Unpaid</option>
                                      <option value="PENDING">Pending</option>
                                      <option value="SHIPPING">Shipping</option>
                                      <option value="SUCCESS">Success</option>
                                    </select>
                                  </div>
                                  <template v-if="status == 'SHIPPING'">
                                    <div class="col-md-3">
                                      <div class="product-title">
                                        Input Resi
                                      </div>
                                      <input
                                        class="form-control"
                                        type="text"
                                        name="resi"
                                        id="openStoreTrue"
                                        v-model="resi"
                                      />
                                    </div>
                                    <div class="col-md-2">
                                      <button
                                        type="submit"
                                        class="mt-4 btn btn-success btn-block"
                                      >
                                        Update Resi
                                      </button>
                                    </div>
                                  </template>
                                </div>
                              </div> -->
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


                              <!-- <div class="col-12">
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="product-title">Status</div>
                                    <select
                                      name="status"
                                      id="status"
                                      class="form-control"
                                      v-model="status"
                                    >
                                      <option value="UNPAID">Unpaid</option>
                                      <option value="PENDING">Pending</option>
                                      <option value="SHIPPING">Shipping</option>
                                      <option value="SUCCESS">Success</option>
                                    </select>
                                  </div>
                                  <template v-if="status == 'SHIPPING'">
                                    <div class="col-md-3">
                                      <div class="product-title">
                                        Input Resi
                                      </div>
                                      <input
                                        class="form-control"
                                        type="text"
                                        name="resi"
                                        id="openStoreTrue"
                                        v-model="resi"
                                      />
                                    </div>
                                    <div class="col-md-2">
                                      <button
                                        type="submit"
                                        class="mt-4 btn btn-success btn-block"
                                      >
                                        Update Resi
                                      </button>
                                    </div>
                                  </template>
                                </div>
                              </div> -->
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
        </div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor' );
  </script>
@endpush
