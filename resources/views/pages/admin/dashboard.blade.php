@extends('layouts.admin')

@section('title')
    Seafarer Dashboard
@endsection

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard Admin</h2>
                <p class="dashboard-subtitle">
                  This is Seafarer Service Dashboard
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Applicant
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $applicant }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Departments
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $department }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Position Available
                        </div>
                        <div class="dashboard-card-subtitle">
                            {{ $department }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Update</h5>

                    <a
                      class="card card-list d-block"
                      href="/dashboard-transactions-details.html"
                    >

                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src=""
                              alt="img"
                            />
                          </div>
                          <div class="col-md-4">
                            Faqihuddin
                          </div>
                          <div class="col-md-3">
                            Basic Safety Training
                          </div>
                          <div class="col-md-3">
                            12 Maret 2026
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="{{ asset('/images/dashboard-arrow-right.svg')}}"
                              alt="icon-detail"
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      class="card card-list d-block"
                      href="/dashboard-transactions-details.html"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src=""
                              alt="img"
                            />
                          </div>
                          <div class="col-md-4">
                            Faqihuddin
                          </div>
                          <div class="col-md-3">
                            Passport
                          </div>
                          <div class="col-md-3">
                            18 Mei 2027
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="{{ asset('/images/dashboard-arrow-right.svg')}}"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      class="card card-list d-block"
                      href="/dashboard-transactions-details.html"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src=""
                              alt="img"
                            />
                          </div>
                          <div class="col-md-4">
                            Sule
                          </div>
                          <div class="col-md-3">
                            Seaman Book
                          </div>
                          <div class="col-md-3">
                            19 Agustus 2026
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="{{ asset('/images/dashboard-arrow-right.svg')}}"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
