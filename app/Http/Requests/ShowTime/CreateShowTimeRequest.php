<?php

namespace App\Http\Requests\ShowTime;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateShowTimeRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'movie_id'     => ['required', 'exists:movies,id'],
            'time_slot_id' => ['required', 'exists:time_slots,id', Rule::unique('show_times')->where(function ($query) {
                return $query->where('movie_id', $this->movie_id)
                    ->where('time_slot_id', $this->time_slot_id)
                    ->where('event_day_id', $this->event_day_id);
            })],
            'event_day_id' => ['required', 'exists:event_days,id',],
        ];
    }
    public function attributes(): array
    {
        return [
            'movie_id'     => 'Movie',
            'time_slot_id' => 'Time slot',
            'event_day_id' => 'Event day',
        ];
    }
    public function messages(): array
    {
        return [
            'time_slot_id.unique' => 'The selected combination of Movie, Time Slot, and Event Day is already taken,choose another.',
        ];
    }
}
