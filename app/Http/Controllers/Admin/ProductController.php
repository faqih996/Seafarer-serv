<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Product;
use App\Models\ThumbnailProduct;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::with(['users','category', 'thumbnail_product']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('product.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $data['users_id'] = auth()->user()->id;

        $data['slug'] = Str::slug($request->name);

        $product = Product::create($data);

        // add thumbnail service
        if($request->hasfile('thumbnail')){
            foreach($request->file('thumbnail') as $file)
            {
                $path = $file->store(
                    'assets/product', 'public'
                );

                $thumbnail_product = new ThumbnailProduct;
                $thumbnail_product->product_id = $product['id'];
                $thumbnail_product->thumbnail = $path;
                $thumbnail_product->save();

            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::with(['category','users'])->findOrFail($id);
        $categories = Category::all();
        $thumbnail_product = ThumbnailProduct::where('product_id', $id)->get();

        return view('pages.admin.product.edit',compact('item', 'categories', 'thumbnail_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $product->update($data);

        // update to thumbail service
        if($request->hasfile('thumbnails')){
            foreach ($request->file('thumbnails') as $key => $file) {

                // get old photo thumbnail
                $get_photo = ThumbnailProduct::where('id', $key)->first();

                // store photo
                $path = $file->store(
                    'assets/product', 'public'
                );

                // update photo
                $thumbnail_product = ThumbnailProduct::find($key);
                $thumbnail_product->thumbnail = $path;
                $thumbnail_product->save();

                // delete old photo thumbnail
                $data = 'storage/' .$get_photo['photo'];
                if (File::exists($data)) {
                    File::delete($data);
                } else {
                    File::delete('storage/app/public/' .$get_photo['photo']);
                }
            }
        }

        // add new photo thumbnail
        if($request->hasfile('thumbnail')){
            foreach($request->file('thumbnail') as $file)
            {
                $path = $file->store(
                    'assets/product', 'public'
                );

                $thumbnail_product = new ThumbnailProduct;
                $thumbnail_product->product_id = $product['id'];
                $thumbnail_product->thumbnail = $path;
                $thumbnail_product->save();
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::findorFail($id);
        $item->delete();

        return redirect()->route('product.index');

    }
}
