<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'max:191'],
            'price' => ['required', 'numeric'], // 10, 10.50
            'description' => ['required'],
            'location' => ['required', 'max:191']
        ];
    }
}
