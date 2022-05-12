@extends('layouts.admin')

@section('title')
    Category Setting
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
>
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Category</h2>
            <p class="dashboard-subtitle">
                Edit "{{ $item->name }}" Category
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

                <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Category Name</label></label>
                            <input type="text" class="form-control" name="name" required value="{{ $item->name }}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <div class="mb-2">
                                    @if ($item->photo)
                                        <img src="{{ asset( 'storage/'. $item->photo ) }}" class="img-preview img-fluid col-sm-5 mb-3" alt="">
                                    @else
                                        <img class="img-preview img-fluid col-sm-5 mb-3" alt="">
                                    @endif
                                        <input type="file" class="form-control" name="photos" placeholder="Photos" required
                                            id="image" onchange="previewImage()" />
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
    <script  type="text/javascript">
        function previewImage(){
            const image = document.querySelector( '#image' );
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader( );
            oFReader.readAsDataURL( image.files[0] );

            oFReader.onload = function( oFREvent ) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
