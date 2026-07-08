<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Authorization is handled directly in the Controller using Policies.
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|max:50|unique:users,name,' . $this->route('user')->id,
            'email'         => 'required|max:50|unique:users,email,' . $this->route('user')->id,
            'roles'         => 'nullable|array'
        ];
    }
}
