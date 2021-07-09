<?php

namespace App\Admin\Contacts\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'dob' => ['required', 'date'],
            'cell_number' => ['required', 'string'],
        ];
    }
}
