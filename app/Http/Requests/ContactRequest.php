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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>'required|string',
            'email' =>'required|email',
            'phone' =>'required|string',
            'message' =>'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Votre nom email est requis",
            'message.required' => "Votre message email est requis",
            'email.required' => "Votre adresse email est requis",
            'email.email' => "Votre adresse email est incorrect",
            'phone.required' => "Votre numéro de téléphone est requis",
        ];
    }
}
