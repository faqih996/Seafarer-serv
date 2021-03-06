<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\DocumentsRequest;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            $query = Documents::with('users');

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
                                    <a class="dropdown-item" href="' . route('documents.edit', $item->id) . '">
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
                ->rawColumns(['action'])
                // raw column ini berfungsi untuk memanggil Fungsi yang ada di addColumn
                ->make();
                // make untuk membuat fungsi rawColums
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


        // dd($data);

        $data['users_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($request->name);
        $data['certificate'] = $request->file('certificate')->store('assets/documents', 'public');

        Documents::create($data);

        return redirect()->route('documents.index')->with('success', 'Your Document Has Been Saved!');
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
        $item = Documents::findOrFail($id);

         return view('pages.document.edit', [
             'item' => $item
         ]);
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
        $data = $request->all();
        // dd($data);
        $data['slug'] = Str::slug($request->name);
        $data['certificate'] = $request->file('certificate')->store('assets/Documents', 'public');

        $item = Documents::findOrFail($id);

        $item->update($data);

        return redirect()->route('documents.index');
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
