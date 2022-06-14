<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*
    public function authorize()
    {
        return true;
    }
    */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.title' => 'required | max:40',
            'post.body' => 'required | max:4000'
        ];
    }
    
        
    /* After hook */
    /*
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
    });
    }
    
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required'  => 'A body is required',
        ];
    }
    */
}
