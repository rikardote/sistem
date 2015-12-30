<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployessRequest extends Request
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
            'name' => 'min:4|max:20|required',
            'father_lastname' => 'min:4|max:20|required',
            'mother_lastname' => 'min:4|max:20|required',
            'num_empleado' => 'min:5|max:6|required|unique:employees',
            'deparment_id' => 'required',
        ];
    }
}
