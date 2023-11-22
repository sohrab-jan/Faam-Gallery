<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fname' => ['required', 'string', 'max:256'],
            'lname' => ['required', 'string', 'max:256'],
            'email' => ['required', 'string', 'email', 'max:256'],
            'phone' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'company_name' => ['nullable', 'string', 'max:256'],
            'service_name' => ['nullable', 'string'],
            'artist' => ['nullable', 'string'],
            'collector' => ['nullable', 'string'],
            'message' => ['nullable', 'string', 'max:10000'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
