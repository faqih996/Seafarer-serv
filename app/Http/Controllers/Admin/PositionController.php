<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\User;
use App\Models\Department;
use App\Models\ThumbnailPosition;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\PositionRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Position::with(['departments']);
            // departmens untuk memanggil data di index. ini mengacu ke DB bukan model

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
                                    <a class="dropdown-item" href="' . route('position.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('position.destroy', $item->id) . '" method="POST">
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
        }

        return view('pages.admin.position.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('pages.admin.position.create', compact('departments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionRequest $request)
    {
        $data = $request->all();
        // ->buat lihat array dari $data/variable lainnya

        $data['users_id'] = auth()->user()->id;

        $data['slug'] = Str::slug($request->name);

        $position = Position::create($data);

        // add thumbnail service
        if($request->hasfile('thumbnail')){
            foreach($request->file('thumbnail') as $file)
            {
                $path = $file->store(
                    'assets/position', 'public'
                );

                $thumbnail_position = new ThumbnailPosition;
                $thumbnail_position->position_id = $position['id'];
                $thumbnail_position->thumbnail = $path;
                $thumbnail_position->save();

            }
        }

        return redirect()->route('position.index')->with('success', 'Data Has Been Saved!');
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
        $item = Position::findOrFail($id);
        $departments = Department::all();
        $thumbnail_position = ThumbnailPosition::where('position_id', $id)->get();

         return view('pages.admin.position.edit', compact('item', 'departments', 'thumbnail_position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, Position $position)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $data['users_id'] = auth()->user()->id;

        $position->update($data);

        // update to thumbail service
        if($request->hasfile('thumbnails')){
            foreach ($request->file('thumbnails') as $key => $file) {

                // get old photo thumbnail
                $get_photo = ThumbnailPosition::where('id', $key)->first();

                // store photo
                $path = $file->store(
                    'assets/position', 'public'
                );

                // update photo
                $thumbnail_position = ThumbnailPosition::find($key);
                $thumbnail_position->thumbnail = $path;
                $thumbnail_position->save();

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
                    'assets/position', 'public'
                );

                $thumbnail_position = new ThumbnailPosition;
                $thumbnail_position->position_id = $position['id'];
                $thumbnail_position->thumbnail = $path;
                $thumbnail_position->save();
            }
        }

        return redirect()->route('position.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Position::findOrFail($id);
        $item->delete();

        return redirect()->route('position.index');
    }
}
