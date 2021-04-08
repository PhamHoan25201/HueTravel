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
            'tieu_de' => 'required | min:5 | max:40',
            'tom_tat' => 'required | min:5 | max:150',
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
        ];
    }
}
