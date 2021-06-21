<?php

namespace App\Http\Requests\Admin;

use App\Rules\UniqueCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'name' => [
                'required',
                new UniqueCategory($this->category)
            ],
            'description' => 'required',
            'status' => [
                'required',
                Rule::in([0, 1])
            ]
        ];
    }
}
