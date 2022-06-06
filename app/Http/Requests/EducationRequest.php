<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'name' => 'required|string',
            'course' => 'required|string',
            // 'degree' => 'required|string',
            'start' => 'required|date',
            'graduate' => 'required|date',
            'address' => 'required|string',
            'regencies' => 'required|string',
            'provinces' => 'required|string',
            'zip_code' => 'required|string',
            'certificate' => 'nullable|image'
        ];
    }

}
