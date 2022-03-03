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
            Edit {{ $item->name }}
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
                    <form action="{{ route('documents.update', $item->id) }}" method="post" enctype="multipart/form-data"">
                        @method('PUT')
                        @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12">
                            <h5>
                                {{ $item->name }}
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
                                value="{{ $item->name }}"
                              />
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="docs_number">Document Number</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="docs_number"
                                  aria-describedby="emailHelp"
                                  name="docs_number"
                                  value="{{ $item->docs_number }}"
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
                                  value="{{ $item->place_issued }}"
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
                                  value="{{ $item->issued_date}}"
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
                                  value="{{$item->expired_date}}"
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

</div>
@endsection

