<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                    'contact_name' => 'required|min:2|max:30',
                    'phone' => 'required|unique:contacts|min:11|max:11',
                    'email' => 'required|unique:contacts|email',
                    'personal_id' => 'required|unique:contacts|min:14|max:14',
                    // 'vat_id' => 'required|unique:contacts',
                    // 'coc' => 'required|unique:contacts'
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
            'contact_name.required' => 'Name is required ,min chars must be 2 and max chars must be 30!',
            'phone.required' => 'phone is required and must be 11 numbers !',
            'email.required' => 'Email is required and must be unique!',
            'personal_id.required' => 'Personal_id is required and must be 14 numbers!',
            // 'vat_id.required' => 'Vat_id is required and must be unique',
            // 'coc.required' => 'coc is required and must be unique',
        ];
    }

    
}
