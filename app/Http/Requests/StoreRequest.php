<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use  App\Rules\customrule;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'code' => 'required|unique:products,code',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => [new customrule],
        ];
    }

    public function messages(){
        return[
        'name.required' => 'The name field is required.',
            'price.numeric' => 'The price field is numeric.',
        ];
    }
}
