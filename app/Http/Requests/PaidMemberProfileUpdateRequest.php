<?php

namespace App\Http\Requests;

use App\Models\PaidMember;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaidMemberProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(PaidMember::class)->ignore($this->user()->id)],
        ];
    }
}
