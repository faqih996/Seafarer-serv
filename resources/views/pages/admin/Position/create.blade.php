@extends('layouts.admin')

@section('title')
Position Settings
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">

            <div class="dashboard-heading">
                <h2 class="dashboard-title">Position</h2>
                <p class="dashboard-subtitle">
                    Create New Position
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

                        <form action="{{ route('position.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Position Name</label>
                                                <input type="text" class="form-control" name="name" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Department Name</label>
                                                <select name="departments_id" class="form-control">
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
                                                <textarea name="about" id="editor"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label>Status</label>
                                                <select name="status" required class="form-control">
                                                    <option>-- Select Status --</option>
                                                    <option value="active">Active</option>
                                                    <option value="nonactive">Non Active</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Thumbnail Product</label>
                                                <img class="img-preview img-fluid col-sm-5 mb-3" alt="">
                                                <input type="file"  placeholder="thumbnail 1" class="form-control mt-2" name="thumbnail[]" id="image" onchange="previewImage()" required />
                                                <input type="file" placeholder="thumbnail 2" class="form-control mt-2" name="thumbnail[]" id="image" onchange="previewImage()" required />
                                                <input type="file" placeholder="thumbnail 3" class="form-control mt-2" name="thumbnail[]" id="image" onchange="previewImage()" required />

                                                <div id="newThumbnailRow"></div>
                                                <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">
                                                    Tambahkan Gambar +
                                                </button>
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
    </div>
@endsection

    @push('addon-script')
    <script src="{{ url('https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="thumbnail" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail " class="form-control mt-2" required>';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
        </script>
    @endpush
