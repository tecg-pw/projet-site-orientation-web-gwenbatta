<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactAgencyRequest extends FormRequest
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
            'name' =>'required',
            'name_supervisor' =>'required',
            'email' =>'required|email',
            'subject'=>'required|min:5|max:50',
            'message' => 'required|min:8|max:500',
            'pdf'=>'nullable|mimes:pdf',
            'softwares'=>'nullable',
            'languages'=>'nullable',
        ];
    }
}
