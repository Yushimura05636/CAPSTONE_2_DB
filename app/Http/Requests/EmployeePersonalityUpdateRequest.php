<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeePersonalityUpdateRequest extends FormRequest
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
        //dinhi is same format lang sa customerpersonalitystorerequest.php
        return [

            //personality fields
            'datetime_registered' => ['required', 'date'],
            'family_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'middle_name' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'civil_status' => ['required', 'integer'],
            'gender_code' => ['required', 'integer'],
            'house_street' => ['required', 'string'],
            'purok_zone' => ['required', 'string'],
            'postal_code' => ['required', 'string'],
            'telephone_no' => ['required', 'string'],
            'email_address' => ['required', 'string'],
            'cellphone_no' => ['required', 'string'],
            'name_type_code' => ['required', 'integer'],
            'personality_status_code' => ['required', 'integer'],
            'barangay_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'province_id' => ['required', 'integer'],
            'credit_status_id' => ['required', 'string'],
            'notes' => ['nullable', 'string'],

            //employee fields
            'sss_no' => ['required', 'integer'],
            'phic_no' => ['required', 'integer'],
            'tin_no' => ['required', 'integer'],
            'date_hired' => ['nullable', 'date'],
            'date_resigned' => ['nullable', 'date'],
            'personality_id' => ['required', 'integer']
        ];
    }
}