<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IncidenciasRequest extends Request
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
            'qna_id' => 'required',
            'employee_id' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'codigodeincidencia_id' => 'required'
            
        ];
    }
}
