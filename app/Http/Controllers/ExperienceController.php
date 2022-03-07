<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experiences;
use App\Models\User;
use App\Models\Profiles;
use App\Models\Educations;
use App\Models\Emergencies;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
    public function store(ExperienceRequest $request)
    {
        $data = $request->all();

        $data['certificate'] = $request->file('certificate')->store('assets/Experience', 'public');

        Experiences::create($data);

        return redirect()->route('profile.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experiences $experience)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\experience  $experience
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
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceRequest $request, $id)
    {
        $data = $request->all();

        $data['certificate'] = $request->file('certificate')->store('assets/Experience', 'public');

        $item = Experiences::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Experiences::findOrFail($id);
        $item->delete();

        return redirect()->route('Experience.show');
    }
}
