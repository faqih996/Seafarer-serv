<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\dashboardModel;

use Illuminate\Http\Request;

Use App\Models\User;
use App\Models\Department;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicant = User::count();
        $department = Department::count();
        return view('pages.admin.dashboard', [
            'applicant' => $applicant,
            'department' => $department
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dashboardModel  $dashboardModel
     * @return \Illuminate\Http\Response
     */
    public function show(dashboardModel $dashboardModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboardModel  $dashboardModel
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboardModel $dashboardModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboardModel  $dashboardModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboardModel $dashboardModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboardModel  $dashboardModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboardModel $dashboardModel)
    {
        //
    }
}
