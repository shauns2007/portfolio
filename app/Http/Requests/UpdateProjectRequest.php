<?php

namespace Portfolio\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
                'max:64',
                Rule::unique('projects')->ignore($this->route('project')->id),
            ],
            'url'           => 'required|url',
            'tags'          => 'required',
            'description'   => 'required',
            'image'         => 'sometimes|required|image|max:2048'
        ];
    }
}
