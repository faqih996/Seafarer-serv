<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|image',
            'users_id'=> 'required|exists:users,id',
            'base'=> 'required|string',
            'position'=> 'required|date',
            'job_title'=> 'required|string',
            'start_of_contract'=> 'required|date',
            'end_of_contract'=> 'required|date',
            'address'=> 'required|string',
            'regencies_id'=> 'required|int',
            'provinces_id'=> 'required|int',
            'zip_code'=> 'required|string',
            'country'=> 'required|int',
            'spv_name'=> 'required|string',
            'institution_phone'=> 'required|int',
            'job_descriptions'=> 'required|string',
            'photo' => 'required|string'
        ];
    }

}
