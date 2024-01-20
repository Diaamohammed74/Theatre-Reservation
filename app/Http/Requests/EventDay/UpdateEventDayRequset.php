<?php

namespace App\Http\Requests\EventDay;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventDayRequset extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => ['required', 'date_format:Y-m-d','after_or_equal:today'],
        ];
    }
}
