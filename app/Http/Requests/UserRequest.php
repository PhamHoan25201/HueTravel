<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required | min:5 | max:20',
            'email' => 'email',
            'urlimg' => 'url',
        ];
    }

    public function messages(){
        return [
            'name.required' => trans('tpl.name.required'),
            'name.min' => trans('tpl.name.min'),
            'name.max' => trans('tpl.name.max'),

            'email.email' => trans('tpl.email.max'),
            'url_img.url' => trans('tpl.url.max'),
        ];
    }
}
