<?php

namespace VaiQueCompra\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompany extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'name' => 'required|max:255',
            'cnpj' => 'required|size:14|cnpj|unique:companies',
            'presentation' => 'required|max:255',
            'image' => 'mimes:jpeg,bmp,png,jpg,gif'
        ];
    }
}
