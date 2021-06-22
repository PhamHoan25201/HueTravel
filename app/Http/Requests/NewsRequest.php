<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            //
            'tieu_de' => 'required | min:5 | max:400',
            'tom_tat' => 'required | min:5 | max:1500',
            'url_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'noi_dung' => 'required | min:5 | max:5000',
        ];
    }
    public function messages(){
        return [
            'tieu_de.required' => trans('tpl.tieu_de.required'),
            'tieu_de.min' => trans('tpl.tieu_de.min'),
            'tieu_de.max' => trans('tpl.tieu_de.max'),

            'tom_tat.required' => trans('tpl.tom_tat.required'),
            'tom_tat.min' => trans('tpl.tom_tat.min'),
            'tom_tat.max' => trans('tpl.tom_tat.max'),

            'url_img.required' => trans('tpl.url_img.required'),
            'url_img.max' => trans('tpl.url_img.max'),

            'noi_dung.required' => trans('tpl.noi_dung.required'),
            'noi_dung.min' => trans('tpl.noi_dung.min'),
            'noi_dung.max' => trans('tpl.noi_dung.max'),
        ];
    }
}
