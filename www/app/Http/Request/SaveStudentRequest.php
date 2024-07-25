<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SaveStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'birth_date' => 'required|date_format:Y-m-d',
            'address_type' => 'required|in:billing,residential,mail',
            'address_street' => 'required',
            'address_cep' => 'required|regex:/\d{5}-?\d{3}/i',
            'address_number' => 'required|numeric',
            'grade' => 'required|in:1,2,3,4',
            'segment' => 'required|in:1,2,3,4',
            'mother_name' => 'required',
        ];
    }
    
    public function all($keys = null)
    {
        return array_merge(parent::all(), [
            'address_cep' => preg_replace('/\D/', '', $this->input('address_cep')),
        ]);
    }
}
