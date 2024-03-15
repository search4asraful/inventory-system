<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'brand_id' => 'required',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,webp',
            'name' => 'required',
            'buy_price' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'qty' => 'required',
            'sku' => 'required|unique:products,sku',
            'short_description' => 'required',
            'long_description' => 'required',
        ];
    }
}
