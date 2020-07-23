<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            //
              'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:10','min:10'],
                'serverip' => ['required', 'string', 'max:355'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                 'location' => ['required', 'string', 'min:5', 'max:150'],
            //TODO: validate by checking if exist in the DB
            'region' => ['required', 'string', 'min:5', 'max:50'],
        ];
    }
}
