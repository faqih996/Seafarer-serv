<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UpdateDetailUserRequest;
use App\Http\Requests\EducationRequest;
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

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

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
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        $user = User::where('id', Auth::user()->id)->first();
        $experience_user = ExperienceUser::where('detail_user_id', $user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $education_user = Educations::where('detail_user_id', $user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $emergency_user = Emergencies::where('detail_user_id', $user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $document_user = Documents::where('detail_user_id', $user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();

        // dd($experience_user, $education_user, $emergency_user, $document_user);

        return view('pages.profile.index', compact('user', 'experience_user', 'education_user', 'emergency_user', 'document_user',
                            'provinces', 'regencies', 'districts', 'villages')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = User::all();
        // return view('pages.profile.create', [
        //     'users' => $users
        // ]);

        return abort(404);
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

        $data_user = User::where('id', Auth::user()->id)->first();

        // $data_detail_user = DetailUser::findOrFail($id);

        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();


        $experience_user = ExperienceUser::where('detail_user_id', $data_user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $education_user = Educations::where('detail_user_id', $data_user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $emergency_user = Emergencies::where('detail_user_id', $data_user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();
        $document_user = Documents::where('detail_user_id', $data_user->detail_user->id)
                                ->OrderBy('id', 'asc')
                                ->get();

        // dd($data_user);
        // dd($experience_user);
        // dd($emergency_user);
        // dd($document_user);
        // dd($education_user);


        return view('pages.profile.edit', compact( 'data_user', 'experience_user', 'education_user', 'emergency_user', 'document_user',
                            'provinces', 'regencies', 'districts', 'villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $profile_request, UpdateDetailUserRequest $request_detail_user )
    {
        $data_user = $profile_request->all();
        $data_detail_user = $request_detail_user->all();
        // $data_education = $request_education->all();


        // process save to user
        $user = User::find(Auth::user()->id);
        $user->update($data_user);

        // process save to Detail User
        $detail_user = DetailUser::find($user->detail_user->id);
        $detail_user->update($data_detail_user);

        // dd($data_user);
        // dd($data_detail_user);
        // dd($detail_user);
        // dd($detail_user['education']);

        $education_user_id = Educations::where('detail_user_id', $detail_user['id'])->first();
        if (isset($education_user_id)) {

            // get array input dari mana sajaa
            // $total = count($data_detail_user['institution_names']);

            // buat increment untuk panggil array position dari tiap array form
            // $inc = 0;
            // $incs = 0;

            // update education
            foreach( $data_detail_user['institution_names'] as $key => $value ){

                $education_user = Educations::find($key);
                $education_user->detail_user_id = $detail_user['id'];
                $education_user->name = $data_detail_user['institution_names'][$key];
                $education_user->course = $data_detail_user['education_courses'][$key];
                $education_user->start = $data_detail_user['education_starts'][$key];
                $education_user->graduate = $data_detail_user['education_graduates'][$key];
                $education_user->address = $data_detail_user['education_addresses'][$key];
                $education_user->regencies = $data_detail_user['education_regencies'][$key];
                $education_user->provinces = $data_detail_user['education_provinces'][$key];
                $education_user->country = $data_detail_user['education_countries'][$key];
                $education_user->zip_code = $data_detail_user['education_zips'][$key];
                $education_user->certificate = $data_detail_user['education_certificates'][$key];
                $education_user->save();

                // $incs++;
            }

            // ['name'] ['course'] ['start'] ['graduate']
            // ['address'] ['regencies'] ['provinces'] ['country'] ['zip_code'] ['certificate']

        } else {

            // add new education
            foreach($data_detail_user['institution_names'] as $key => $value) {
                if(isset($value)){
                    $education_user = new Educations;
                    $education_user->detail_user_id = $detail_user['id'];
                    $education_user->name = $data_detail_user['institution_name'][$key];
                    $education_user->course = $data_detail_user['education_course'][$key];
                    $education_user->start = $data_detail_user['education_start'][$key];
                    $education_user->graduate = $data_detail_user['education_graduate'][$key];
                    $education_user->address = $data_detail_user['education_address'][$key];
                    $education_user->regencies = $data_detail_user['education_regency'][$key];
                    $education_user->provinces = $data_detail_user['education_province'][$key];
                    $education_user->country = $data_detail_user['education_zip'][$key];
                    $education_user->zip_code = $data_detail_user['education_country'][$key];
                    $education_user->certificate = $data_detail_user['education_certificate'][$key];
                    $education_user->save();

                }
            }
        }


        return redirect()->route('profile.index');
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
