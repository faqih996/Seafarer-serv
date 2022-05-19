<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
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
            'name' => 'required|string',
            'departments_id' => 'required|exists:departments,id',
            // untuk memanggil department / dari tabel lain, dari awal harus dibuat jamak karna
            // akan memangggil dari db -> di db selalu jamak
            'status' => 'required|string',
            'about' => 'nullable|string',
        ];
    }

}
