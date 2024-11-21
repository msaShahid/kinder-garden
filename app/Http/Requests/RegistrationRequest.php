<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'child_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'class' => 'required|string', 
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'zip_code' => 'required||min:1|max:7', 
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:1024', 
            'picked_up_persons' => 'required|array|min:1|max:6', 
            'picked_up_persons.*.person_name' => 'required|string|max:255', 
            'picked_up_persons.*.relation' => 'required|string',
            'picked_up_persons.*.contact_no' => 'required|digits:10', 
        ];
    }

    public function messages()
    {
        return [
            'picked_up_persons.*.contact_no.digits' => 'Each contact number must be exactly 10 digits.',
            'picked_up_persons.*.relation.in' => 'Each picked-up person must have a valid relation (Father, Mother, etc.).',
        ];
    }

}
