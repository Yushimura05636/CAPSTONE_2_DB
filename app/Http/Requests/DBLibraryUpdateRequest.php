<?php

namespace App\Http\Requests;
use GuzzleHttp\Psr7\Request;

class DBLibraryUpdateRequest extends Request
{
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

     public function rules() : array
     {
        return [
            'description', 'required',
        ];
     }
}
