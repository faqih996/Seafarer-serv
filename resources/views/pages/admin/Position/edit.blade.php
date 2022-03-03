@extends('layouts.admin')

@section('title')
  Positions Setting
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Positions</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->name }}" Position
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
          <form action="{{ route('profile.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Position Name</label>
                      <input type="text" class="form-control" name="name" required value="{{ $item->name }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori Product</label>
                        <select class="form-control" name="departments_id" id="">
                            @foreach($departments as $department)
                                @if(old('departments_id') == $department->id)
                                <option value="{{ $department->id }}" selected>{{ $department->name }}</option>
                                @else
                                <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="about" id="editor">{!! $item->about !!}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Responsibilities</label>
                      <input type="text" class="form-control" name="responsibilities" required value="{{ $item->responsibilities }}"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" required class="form-control">
                          <option value="{{ $item->status }}" selected>Tidak diganti</option>
                          <option value="active">Active</option>
                          <option value="nonactive">Non Active</option>
                      </select>
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

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor' );
  </script>
@endpush
