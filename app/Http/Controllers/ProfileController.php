<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage;
use App\Exports\DetailUserExport;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\User;
use App\Models\DetailUser;
use App\Models\ExperienceUser;
use App\Models\Educations;
use App\Models\Emergencies;
use App\Models\Documents;
use App\Models\Education;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $experience_user = ExperienceUser::where('detail_user_id', $user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();

        return view('pages.profile.index', compact('user', 'experience_user', )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.profile.create', [
            'users' => $users
        ]);

        // return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {

        // $data = $request->all();
        // // dd($data);
        // $data['users_id'] = auth()->user()->id;
        // $data['photos'] = $request->file('photos')->store('assets/profile', 'public');


        // DetailUser::create($data);

        // return redirect()->route('profile.create')->with('success', 'Your Profile Has Been Saved!');

        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = DetailUser::findOrFail($id);
        // return view('pages.profile.me',[
        //       'item' => $item,
        // ]);

        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DetailUser::findOrFail($id);
        $education = Educations::findOrFail($id);
        $experience = Experiences::findOrFail($id);
        $emergency = Emergencies::findOrFail($id);
        return view('pages.profile.edit', [
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

        $item = DetailUser::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile.create');
    }

    public function myprofile()
    {
        // return view('pages.profile.me');

        return abort(404);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DetailUser::findOrFail($id);
        $item->delete();

        return redirect()->route('profile.index');
    }


}
