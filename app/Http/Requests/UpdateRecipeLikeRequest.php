<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecipeLikeRequest extends FormRequest
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
            'judul' => ['min:1', 'max:255'],
            'desc' => ['min:1'],
            'bahan' => ['min:1'],
            'langkah' => ['min:1'],
            'photo' => ['file', 'mimes:jpg,png,jpeg,gif', 'max:4096'],
        ];
    }
}
