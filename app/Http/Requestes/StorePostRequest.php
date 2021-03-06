<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required',
            'post_creator' => ['required','exists:users,id'],
        ];
    }

    public function messages()
    {
        return [
                // 'title.required' => 'override this message',
                // 'title.min' => 'this is a new minimum message',
        ];
    }
}
