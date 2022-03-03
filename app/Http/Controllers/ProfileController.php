<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use App\Models\User;
use App\Models\Experiences;
use App\Models\Educations;
use App\Models\Emergencies;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data['photos'] = $request->file('photos')->store('assets/profile', 'public');

        Profiles::create($data);

        return redirect()->route('profile.create');
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

        $item = Profiles::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile.create');
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

        return redirect()->route('profile.index');
    }
}
