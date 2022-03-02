<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\User;
use App\Http\Requests\DocumentsRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (request()->ajax()) {
            $query = Documents::query();
            // departmens untuk memanggil data di index. ini mengacu ke DB bukan model

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('departments.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('documents.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height: 80px;"/>' : '';
                })
                ->rawColumns(['action','photos'])
                // raw column ini berfungsi untuk memanggil Fungsi yang ada di addColumn dan editColumn
                ->make();
        }

        return view('pages.document.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.document.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentsRequest $request)
    {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/Documents', 'public');

        Documents::create($data);

        return redirect()->route('documents.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Documents::findOrFail($id);
        $item->delete();

        return redirect()->route('documents.index');
    }
}
