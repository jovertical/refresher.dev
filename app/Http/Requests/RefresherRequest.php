<?php

namespace App\Http\Requests;

use App\Enums\Level;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RefresherRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [Rule::requiredIf($this->step === 1), 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:510'],
            'difficulty' => [
                Rule::requiredIf($this->step === 1),
                Rule::in(Level::getValues())
            ],
        ];
    }
}
