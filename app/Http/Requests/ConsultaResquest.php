<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaResquest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'app_specialty'=>'required',
            'app_name'=>'required',
            'app_email'=>'required',
            'app_phone'=>'required'
        ];
    }
}
