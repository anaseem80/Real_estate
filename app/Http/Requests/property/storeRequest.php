<?php

namespace App\Http\Requests\property;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'catogerie_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'space' => 'required|numeric',
            'numbeer_room' => 'required|integer',
            'property_direction' => 'required|string',
            'numbeer_toilet' => 'required|integer',
            // 'classification' => 'required|string',
            // 'seller_phone' => 'string',
            "Rental_term" => 'required|string',
            'address' => 'required|string',
            //  "classification"=> "volvo",
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'يرجي ادخال اسم العقار',
            'image.required' => 'يرجي ادخال الصوره',
            'images.required' => 'يرجي ادخال الصوره',
            'country' => 'يرجي ادخال المدينه',
            'catogerie_id' => 'يرجي ادخال نوع العقار',
            'price' => 'يرجي ادخال السعر',
            'description' => 'يرجي ادخال الوصف',
            'space' => 'يرجي ادحال المساحه',
            'numbeer_room' => 'يرجي ادخال عدد الغرف',
            'property_direction' => 'يرجي ادحال الاتجاه',
            'numbeer_toilet' => 'يرجي ادخال عدد الحمامات',
            'address' => 'يرجي ادخال العنوان',
            'Rental_term' => 'يرجي ادخال المده',
            // 'images.required' =>'يرجي ادخال الصوره',
            'space.numeric' => 'يرجي ادخال المساحه عدد وليس اي شئ اخر',
            'price.numeric' => 'يرجي ادخال السعر عدد وليس اي شئ اخر',
        ];
            

    }
}
