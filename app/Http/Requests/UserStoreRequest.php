<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'regex:/^[a-zA-Z]{1,}\s?[a-zA-Z]{1,}/i'],
            'last_name' => ['required', 'regex:/^[a-zA-Z]{1,}\s?[a-zA-Z]{1,}/i'],
            'type_document' => ['regex:/CC|CE|NIT{2,3}$/'],
            'identification' => ['regex:/^([0-9]{6,10}-?[0-9]{1}?$)/'],
            'email' => ['regex:/^[\w]+@([\w]+\.)+[\w-]{2,4}$/'],
        ];
    }
}
