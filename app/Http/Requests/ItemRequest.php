<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'room_type'=>'required',//items
            'from_time'=> 'required',//items
            'to_time'=> 'required',//items
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'from_time.required' => 'Check in is required', //items
            'to_time.required' => 'Check out isrequired', //items
            'room_type.required' => 'room type is required', //items
        ];
    }
}
