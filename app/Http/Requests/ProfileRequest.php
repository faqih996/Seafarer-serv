<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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

            'users_id'=> 'nullable|exists:users,id',
            'birth_place'=> 'nullable|string',
            'birth_date'=> 'required|date',
            'about_me'=> 'nullable|string',
            'phone_number'=> 'required|string|max:15',
            'address'=> 'required|string',
            'regencies_id'=> 'required|string',
            'provinces_id'=> 'required|string',
            'zip_code'=> 'required|string',
            'country'=> 'required|string',
            'occupation'=> 'nullable|string',
            'skype'=> 'nullable|string',
            'gender' => 'required|string',
            'marital' => 'required|string',
            'photo' => 'nullable|image',
        ];
    }

}
