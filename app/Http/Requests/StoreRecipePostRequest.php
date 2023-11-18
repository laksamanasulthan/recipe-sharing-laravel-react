<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreRecipePostRequest extends FormRequest
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
            'judul' => ['required', 'min:1', 'max:255'],
            'desc' => ['required', 'min:1'],
            'bahan' => ['required'],
            'langkah' => ['required'],
            'photo' => ['file', 'mimes:jpg,png,jpeg,gif', 'max:4096'],
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw (new ValidationException($validator))
    //         ->errorBag($this->errorBag);
    // }
}
