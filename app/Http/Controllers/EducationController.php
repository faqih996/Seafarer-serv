<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profiles;
use App\Models\Experiences;
use App\Models\Educations;
use App\Models\Emergencies;
use App\Http\Requests\EducationRequest;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        return view('pages.profile.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationRequest $request)
    {
        $data = $request->all();

        $data['users_id'] = auth()->user()->id;
        $data['certificate'] = $request->file('certificate')->store('assets/Education', 'public');

        Educations::create($data);

        return redirect()->route('profile.create')->with('success', 'Your Education Data Has Been Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Educations $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Profiles::findOrFail($id);
        $education = Educations::findOrFail($id);
        $experience = Experiences::findOrFail($id);
        $emergency = Emergencies::findOrFail($id);
        return view('pages.profile.editedu', [
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
     * @param  \App\Models\education  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, educations $id)
    {
        $data = $request->all();

        $data['certificate'] = $request->file('certificate')->store('assets/Documents', 'public');

        $item = Educations::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educations $id)
    {
        $item = Profiles::findOrFail($id);
        $item->delete();

        return redirect()->route('profile.index');
    }
}
