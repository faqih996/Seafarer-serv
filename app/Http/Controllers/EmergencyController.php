<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmergencyRequest;
use App\Models\Emergencies;
use Illuminate\Http\Request;

class EmergencyController extends Controller
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
    public function store(EmergencyRequest $request)
    {
        $data = $request->all();

        Emergencies::create($data);

        return redirect()->route('profile.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(EmergencyRequest $request, $id)
    {
        $data = $request->all();

        Emergencies::create($data);

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Emergencies::findorFail($id);
        $item->delete();

        return redirect()->route('Emergency.show');
    }
}
