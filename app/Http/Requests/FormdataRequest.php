<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormdataRequest extends FormRequest
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
            'productname'=> 'bail|required|max:255',
            'stockquentity' =>  'required|integer',
            'peritemprice'  =>  'required|numeric',
        ];
    }

    public function messages(){
        return [
            'productname.required'  => 'Product Name is required',
            'stockquentity.required'  => 'Quentity required',
            'stockquentity.integer'  => 'Quentity should be an integer number',
            'peritemprice.required'  => 'Product price is required',
            'peritemprice.numeric'  => 'Product price should be number with 2 decimal.',
        ];
    }
}
