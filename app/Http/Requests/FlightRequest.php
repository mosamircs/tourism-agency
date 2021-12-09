<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'availability'=>'required|numeric',
            'from_location' => 'required|min:2',
            'to_location' => 'required|min:2',
            'price' => 'required|numeric',
            
        ];
    }

    
}
