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
    {{-- passport --}}
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
                          <div class="col-md-6" >
                            <div class="form-group">
                              <label for="name" hidden>Document Name</label>
                              <input
                                type="hidden"
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
    {{-- seaman --}}
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
                              Seaman Book
                            </h5>
                            </div>
                          </div>
                          <div class="col-md-6" >
                            <div class="form-group">
                              <label for="name" hidden>Document Name</label>
                              <input
                                type="hidden"
                                class="form-control"
                                id="name"
                                aria-describedby="emailHelp"
                                name="name"
                                value="Seaman Book"
                              />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="docs_number">Seaman Number</label>
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
    {{-- BST --}}
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
                                Basic Safety Training
                            </h5>
                            </div>
                            </div>
                            <div class="col-md-6" >
                            <div class="form-group">
                                <label for="name" hidden>Document Name</label>
                                <input
                                type="hidden"
                                class="form-control"
                                id="name"
                                aria-describedby="emailHelp"
                                name="name"
                                value="Basic Safety Training"
                                />
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="docs_number">Seaman Number</label>
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

    {{-- Other Docs --}}
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
                                            Add Other Documents
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <label for="name" >Document Name</label>
                                            <select name="name" required class="form-control">
                                                <option value="Safety Awareness Training">Safety Awareness Training</option>
                                                <option value="Crowd Management">Crowd Management</option>
                                                <option value="Crisis and Human Behavior Management">Crisis and Human Behavior Management</option>
                                                <option value="Advanced Fire Fighting Training">Advanced Fire Fighting Training</option>
                                                <option value="Medical First Aid and Medical Care Training">Medical First Aid and Medical Care Training</option>
                                                <option value="Fast Rescue Boats Training">Fast Rescue Boats Training</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="docs_number">Document Number</label>
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

                                    <div class="col-md-4">
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
                                    {{-- <div class="col-md-12 mb-3">
                                        <button
                                            class="btn btn-secondary btn-block"
                                        >
                                            Add Documents
                                        </button>
                                    </div> --}}
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

</div>
@endsection

