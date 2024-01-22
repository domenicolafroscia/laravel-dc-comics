<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:250',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is obligatory',
            'title.min' => 'The title must be at least :min characters long',
            'title.max' => 'The title is too long, max :max characters',
            'thumb.required' => "The image is obligatory",
            'price.required' => "The price is obligatory",
            'series.required' => "The series is obligatory",
            'sale_date.required' => "The sale date is obligatory",
            'type.required' => "The type is obligatory, choose an option from those available"
        ];
    }
}
