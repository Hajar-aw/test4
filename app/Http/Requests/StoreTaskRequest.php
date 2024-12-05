<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'title' => 'required|string',
            'des' => 'required|string',
            'pri' => 'nullable|integer',
            'user_id' => 'exists:users,id|integer'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'لااااااااا'
        ];
    }
}
