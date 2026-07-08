<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('haveaccess', 'role.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|max:20|unique:roles,name',
            'slug'          => 'required|max:20|unique:roles,slug',
            'full-access'   => 'required|in:yes,no',
            'permission'    => 'nullable|array',
        ];
    }
}
