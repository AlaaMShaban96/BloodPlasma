<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BenefactorRequest extends FormRequest
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
            "name" => 'required',
            "number" => 'required|min:10|max:10',
            "remember_token" => 'required',
            "blood_id" => 'required',
            "city_id" => 'required',
        ];
    }
    public function messages()
    {        
         return [
                "name.required" => " ادخل اسم المتبرع ",
                "number.required" => "ادخل رقم الهاتف ",
                "number.min" => "ادخل رقم الهاتف متكون من 10 ارقام ",
                "number.max" => "ادخل رقم الهاتف متكون من 10 ارقام ",
                "blood_id.required" => " تأكد من اختيار فصيلة الدم  ",
                "city_id.required" => " تأكد من اختيار المدينة  ",
                "token.required" => " خطاء في token  ",
         ];
    }

}
