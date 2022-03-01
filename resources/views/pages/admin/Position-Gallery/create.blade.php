@extends('layouts.admin')

@section('title')
  Position Gallery Settings
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Position Gallery</h2>
        <p class="dashboard-subtitle">
            Create New Position Gallery
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
          <form action="{{ route('positions-galleries.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Position Name</label>
                        <select name="positions_id" class="form-control">
                          @foreach($positions as $position)
                          @if(old('positions_id') == $position->id)
                              <option value="{{ $position->id }}" selected>{{ $position->name }}</option>
                            @else
                              <option value="{{ $position->id }}" >{{ $position->name }}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Photo</label>
                      <input type="file" class="form-control" name="photos" placeholder="Photo" required />
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
