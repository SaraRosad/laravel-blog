<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TagFormRequest extends FormRequest
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
        $rules = [
            'name' =>[
                'required',
                'string'
            ],
            'meta_title' =>[
                'required',
                'string'
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png,svg'
            ],
            'slug'=>[
                'required',
                'string'
            ],
            'status'=>[
                'nullable'
            ]
        ];

        return $rules;
    }
}
