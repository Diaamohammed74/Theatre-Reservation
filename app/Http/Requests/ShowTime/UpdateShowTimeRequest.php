<?php

namespace App\Http\Requests\ShowTime;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShowTimeRequest extends FormRequest
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
            'movie_id'     => 'Movie',
            'time_slot_id' => 'Time slot',
            'event_day_id' => 'Event day',
        ];
    }
}
