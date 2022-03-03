@extends('layouts.admin')

@section('title')
  Documents
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Travel Documents</h2>
      <p class="dashboard-subtitle">
        Make sure your doucments is valid
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
                    <form action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data"">
                        @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                            <h5>
                              Passport
                            </h5>
                            </div>
                          </div>
                          <div class="col-md-6" hidden>
                            <div class="form-group">
                              <label for="name">Document Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                aria-describedby="emailHelp"
                                name="name"
                                value="Passport"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="docs_number">Passport Number</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="docs_number"
                                  aria-describedby="emailHelp"
                                  name="docs_number"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="place_issued">Issuance Place</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="place_issued"
                                  aria-describedby="emailHelp"
                                  name="place_issued"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="issued_date">Issuance Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="issued_date"
                                  aria-describedby="emailHelp"
                                  name="issued_date"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="expired_date">Expiration Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="expired_date"
                                  aria-describedby="emailHelp"
                                  name="expired_date"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="photos">Scan Documents</label>
                                <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="photos"
                                  aria-describedby="photos"
                                  name="photos"
                                />

                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
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
              <!-- seaman book -->
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-3">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                            <h5>
                              Seaman Book
                            </h5>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Document Number</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PassNumb"
                                  aria-describedby="emailHelp"
                                  name="PassNumb"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Issuance Place</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PlaceIssue"
                                  aria-describedby="emailHelp"
                                  name="PlaceIssue"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Issuance Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Expiration Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="thumbnails">Scan Documents</label>
                                <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="thumbnails"
                                  aria-describedby="thumbnails"
                                  name="thumbnails"
                                />
                                <small class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </small>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
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
              <!-- Basic Safety Docs -->
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-3">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                            <h5>
                              Basic Safety Training
                            </h5>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Document Number</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PassNumb"
                                  aria-describedby="emailHelp"
                                  name="PassNumb"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Issuance Place</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PlaceIssue"
                                  aria-describedby="emailHelp"
                                  name="PlaceIssue"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Issuance Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Expiration Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="thumbnails">Scan Documents</label>
                                <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="thumbnails"
                                  aria-describedby="thumbnails"
                                  name="thumbnails"
                                />
                                <small class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </small>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
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
              <!-- Other Docs -->
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-3">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                            <h5>
                              Add Other
                            </h5>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Document Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PassNumb"
                                  aria-describedby="emailHelp"
                                  name="PassNumb"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Document Number</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PassNumb"
                                  aria-describedby="emailHelp"
                                  name="PassNumb"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="storeName">Issuance Place</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="PlaceIssue"
                                  aria-describedby="emailHelp"
                                  name="PlaceIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Issuance Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="addressOne">Expiration Date</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="DateIssue"
                                  aria-describedby="emailHelp"
                                  name="DateIssue"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="thumbnails">Scan Documents</label>
                                <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="thumbnails"
                                  aria-describedby="thumbnails"
                                  name="thumbnails"
                                />
                                <small class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </small>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <button
                                class="btn btn-secondary btn-block"
                              >
                                Add Experience
                              </button>
                            </div>
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
