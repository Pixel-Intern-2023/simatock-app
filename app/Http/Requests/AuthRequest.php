<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
        if ($this->is('login')) {
            return [
                'username' => 'required',
                'password' => 'required',
            ];
        }
        if ($this->is('register')) {
            return [
                'name' => 'required',
                'email' => 'required|dns',
                'username' => 'required',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|min:8'
            ];
        }
        return [];
    }
}
