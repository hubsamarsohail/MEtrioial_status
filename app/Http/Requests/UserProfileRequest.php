<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'sur_name' => 'required|max:25',
            'email' => 'required|max:50',
            'nationality' => 'required|max:25',
            'country_id' => 'required|digits_between:1,20',
            'city_id' => 'required|digits_between:1,20',
            'cast' => 'required|max:25',
            'religion' => 'required|max:25',
            'dob' => 'required|max:25',
            'age' => 'required|max:25',
            'marital_status' => 'required|max:25',
            'hair_color' => 'required|max:25',
            'complexion' => 'required|max:25',
            'mobile' => 'required|max:25',
            'other_lang' => 'required|max:25',
            'ethnicity' => 'required|max:25',
            'eye_color' => 'required|max:25',
            'residential_city' => 'required|digits_between:1,20',
            'skin_color' => 'required|max:25',
            'elementry_school' => 'required|max:25',
            'job_title' => 'required|max:25',
            'skill' => 'required|max:25',
            'body_shape' => 'required|max:25',
            'height' => 'required|max:25',
            'life_style' => 'required|max:25',
            'physique_id' => 'required|digits_between:1,20',
            'salary_range' => 'required',
            'drink_status' => 'required|max:25',
            'pet_status' => 'required|max:25',
            'profession' => 'required|max:25',
            'partner_alcohol' => 'required|max:25',
            'smoke_status' => 'required|max:25',
            'description' => 'required',
            'heigh_school' => 'required',
            'partner_divorce' => 'required|max:25',
            'second_marriage' => 'required|max:25',
            'partner_smoke' => 'required|max:25',
        ];
    }
}
