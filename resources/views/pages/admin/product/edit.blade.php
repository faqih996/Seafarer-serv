@extends('layouts.admin')

@section('title')
    Product Setting
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Product</h2>
            <p class="dashboard-subtitle">
                Edit "{{ $item->name }}" Product
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

                    <form action="{{ route('product.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Product</label>
                                            <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori Product</label>
                                            <select name="categories_id" class="form-control">
                                                <option value="{{ $item->categories_id }}">{{ $item->category->name }}</option>
                                                <option value="" disabled>----------------</option>
                                                @foreach ($categories as $categories)
                                                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="thumbnail-service" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Product</label>

                                        <div class="grid grid-cols lg:grid-cols-3 md:grid-cols-2 gap-4">
                                            @forelse ($thumbnail_product as $thumbnail_item)
                                                <div class="mb-2">
                                                    <img src="{{ url(Storage::url($thumbnail_item->thumbnail)) }}" alt="thumbnail" srcset=""
                                                    class="inline object-cover w-20 h-20 rounded" for="choose">

                                                    <input type="file" placeholder="Thumbnails" name="{{ 'thumbnails['.$thumbnail_item->id.']' }}"
                                                    id="thumbnails" autocomplete="thumbnails" class="block w-full py-3 pl-5 mt-3 border-grey-300
                                                    rounded-md shadow-sm focus:ring-green-500 sm:text-sm">
                                                </div>
                                            @empty
                                                {{-- empty --}}
                                            @endforelse
                                        </div>

                                        <div id="newThumbnailRow"></div>

                                        <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">
                                            Tambahkan Gambar +
                                        </button>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control" name="price" value="{{ $item->price }}" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" id="editor">{!! $item->description !!}</textarea>
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
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
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
