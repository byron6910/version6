<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViajeRequest extends FormRequest
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
            // 'id_viaje'=>'max:10|required|unique:viaje,estado',
            'estado'=>'required|boolean',
            'id_origen_destino'=>'required|numeric',//revisar tiempo
            'id_horario'=>'required|numeric'
         
        ];
    }
}
