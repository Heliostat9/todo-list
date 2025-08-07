<?php

namespace App\Http\Requests\Api\V1\Task;

use App\Enum\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Requests\Traits\TrimsStrings;


class UpdateTaskRequest extends FormRequest
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
            'title' => ['string', 'max:255', 'min:1'],
            'description' => ['string'],
            'status' => [Rule::enum(TaskStatus::class)],
        ];
    }
}
