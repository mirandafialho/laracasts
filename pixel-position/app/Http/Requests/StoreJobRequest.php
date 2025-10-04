<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return !Auth::guest();
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time', 'Contract'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ];
    }
}
