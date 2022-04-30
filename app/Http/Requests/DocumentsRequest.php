<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentsRequest extends FormRequest
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
            'users_id'=> 'nullable|exists:users,id',
            'docs_number' => 'required|string',
            'place_issued' => 'required|string',
            'issued_date' => 'required|date',
            'expired_date' => 'required|date',
            'docs_status' => 'nullable|string',
            'certificate' => 'nullable|image'
        ];
    }

}
