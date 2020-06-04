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
            'name'    => 'required|max: 255',
            'sername'    => 'required|max: 255|nullable',
            'tel'    => 'max: 255',
            'city'    => 'max: 255',
            'about'    => 'max: 255',
        ];
    }
}
