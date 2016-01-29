<?php namespace App\Http\Requests;

class FoodRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => 'required|unique:foods|max:20',
            'title' => 'required|max:20'

        ];
    }

}
