<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;

class TransactionUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required|unique:users,email,'.Request()->id,
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];
    }
}
