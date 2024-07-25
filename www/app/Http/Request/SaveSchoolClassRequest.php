<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SaveSchoolClassRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'shift' => 'required|in:1,2,3',
            'grade' => 'required|in:1,2,3,4',
            'spaces' => 'required|numeric',
            'year' => 'required|date_format:Y',
        ];
    }
}
