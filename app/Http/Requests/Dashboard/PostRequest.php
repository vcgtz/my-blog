<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\UniqueSlug;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'slug' => [
                'required',
                new UniqueSlug($this->post)
            ],
            'category_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'content' => 'required',
        ];
    }
}
