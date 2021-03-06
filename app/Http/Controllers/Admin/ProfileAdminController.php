<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Profiles;
use App\Models\User;
use App\Models\Experiences;
use App\Models\Educations;
use App\Models\Emergencies;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage;
use App\Exports\ProfilesExport;
use Maatwebsite\Excel\Facades\Excel;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->ajax()) {
            $query = Profiles::with(['users']);

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
                                    <a class="dropdown-item" href="' . route('profiles.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('profiles.destroy', $item->id) . '" method="POST">
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
                ->make();
        }
        return view('pages.admin.profiles.index', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.admin.profiles.create', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $data['users_id'] = auth()->user()->id;
        $data['photos'] = $request->file('photos')->store('assets/profile', 'public');

        Profiles::create($data);

        return redirect()->route('profiles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Profiles::findOrFail($id);
        $education = Educations::findOrFail($id);
        $experience = Experiences::findOrFail($id);
        $emergency = Emergencies::findOrFail($id);
        return view('pages.admin.profiles.edit', [
            'item' => $item,
            'education' => $education,
            'experience' => $experience,
            'emergency' => $emergency
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $data = $request->all();

        $item = Profiles::findOrFail($id);

        $item->update($data);

        return redirect()->route('profiles.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Profiles::findOrFail($id);
        $item->delete();

        return redirect()->route('profiles.index');
    }

    public function export()
    {
        return Excel::download(new ProfilesExport, 'profiles.xlsx');
    }
}
