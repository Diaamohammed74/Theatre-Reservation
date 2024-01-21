<?php

namespace App\Http\Requests\Reserve;

use Illuminate\Foundation\Http\FormRequest;

class CreateReserveRequset extends FormRequest
{
                    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'         => ['required','string'],
            'email'        => ['required','email','ends_with:gmail.com,yahoo.com',],
            'phone'        => ['required','numeric','regex:/^(010|011|012|015)\d{8}$/'],
            'show_time_id' => ['required','integer','exists:show_times,id'],
        ];
    }
    public function attributes(): array{
        return [
            'show_time_id' => 'Show time'
        ];
    }
}
