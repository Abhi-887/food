<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'color' => ['required', 'max:255'],
            'icon' => ['required', 'max:50'],
            'title' => ['required', 'max:250'],
            'description' => ['required', 'max:2550'],
            'link' => ['required', 'max:250'],

            'status' => ['required', 'boolean']
        ];
    }
}
