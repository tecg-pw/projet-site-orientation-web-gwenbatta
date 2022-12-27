<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required',
            'firstname' => 'required',
            'status_id' => 'required',
            'description'=>'min:20|max:300|nullable',
            'avatar' => 'nullable',
            'back_image'=> 'nullable',
            'email' => 'required|email',

        ];
    }
}
