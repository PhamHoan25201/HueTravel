<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
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
            'url_img1' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'url_img2' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'description' => 'required | min:5 | max:5000',
        ];
    }

    public function messages(){
        return [
            'url_img1.required' => trans('tpl.url_img.required'),
            'url_img1.min' => trans('tpl.url_img.min'),
            'url_img1.max' => trans('tpl.url_img.max'),

            'url_img2.required' => trans('tpl.url_img.required'),
            'url_img2.min' => trans('tpl.url_img.min'),
            'url_img2.max' => trans('tpl.url_img.max'),

            'description.required' => trans('tpl.description.required'),
            'description.min' => trans('tpl.description.min'),
            'description.max' => trans('tpl.description.max'),
        ];
    }
}
