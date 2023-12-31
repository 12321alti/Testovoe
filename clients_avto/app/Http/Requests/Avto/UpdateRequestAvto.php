<?php

namespace App\Http\Requests\Avto;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestAvto extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'model' => 'string|min:3',
            'marka' => 'string',
            'color' => 'string',
            'gos_number' => 'integer',
            'parking' => 'integer',
            'client_id' => 'integer',
        ];
    }
}
