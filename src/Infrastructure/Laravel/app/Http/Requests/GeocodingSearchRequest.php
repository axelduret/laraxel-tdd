<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeocodingSearchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, \Illuminate\Contracts\Validation\Rule|array|string> */
    public function rules(): array
    {
        return [
            'format' => [
                'nullable',
                'regex:/^[a-zA-Z ]+$/',
                'in:xml,json,jsonv2,geojson,geocodejson',
            ],
            'street' => [
                'nullable',
                'regex:/^[0-9a-zA-Z ]+$/',
                'min:10',
                'max:100',
            ],
            'postalcode' => [
                'nullable',
                'regex:/^[0-9a-zA-Z ]+$/',
                'min:3',
                'max:100',
            ],
            'city' => [
                'nullable',
                'regex:/^[a-zA-Z ]+$/',
                'min:3',
                'max:100',
            ],
            'country' => [
                'nullable',
                'regex:/^[a-zA-Z ]+$/',
                'min:3',
                'max:100',
            ],
        ];
    }
}
