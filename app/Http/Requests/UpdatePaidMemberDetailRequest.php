<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaidMemberDetailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'paid_member_id' => ['max:50'],
            'nick_name' => ['required', 'max:50'],
            'greeting' => ['max:1000'],
            'filename' => ['max:255'], // ファイル名の最大文字数を指定
        ];
    }
}
