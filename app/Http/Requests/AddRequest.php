<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class AddRequest extends FormRequest
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
            'text'     => 'required|max: 255',
            'date'     => 'required|date|max: 255',
            'head'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'author'   => 'required|string|max:3',
            
        ];
    }
}
