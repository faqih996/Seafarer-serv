<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmergencyRequest extends FormRequest
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
            'family_name' => 'required|string',
            'relations' => 'required|string',
            'contact1' => 'required|integer',
            'contact2' =>'required|integer',
            'email' => 'required|string',
            'address' => 'required|string',
            'regencies_id' => 'required|integer',
            'provinces_id' => 'required|integer',
            'zip_code' => 'required|integer',
            'country' => 'required|string'
        ];
    }

}
