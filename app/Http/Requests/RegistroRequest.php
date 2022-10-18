<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'password' => 'required',
            // 'sabor' => 'required|in:chocolate,vainilla,cheesecake'
        ];
    }

    public function messages()
{
    return [
        'nombre.required' => 'A name is required',
        'body.required'  => 'A message is required',
    ];
}
}
