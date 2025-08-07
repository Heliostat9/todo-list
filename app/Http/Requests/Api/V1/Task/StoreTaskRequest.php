<?php

namespace App\Http\Requests\Api\V1\Task;

use App\Http\Requests\Traits\TrimsStrings;
use Illuminate\Foundation\Http\FormRequest;


class StoreTaskRequest extends FormRequest
{
    use TrimsStrings;

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
            'title' => ['required', 'string', 'max:255', 'min:1'],
            'description' => ['required', 'string'],
        ];
    }
}
