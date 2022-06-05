<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'password' => ['string', 'max:255', 'nullable'],
            'name' => ['string', 'max:50'],
            'phone' => ['required', 'string', 'min:5', 'max:15'],
            'kecamatan' => ['required', 'string', 'min:5', 'max:25'],
            'kabupaten' => ['required', 'string', 'min:5', 'max:30'],
            'provinsi' => ['required'],
            'kodePos' => ['required', 'numeric', 'min:5', 'max:999999'],
            'detailAlamat' => ['required', 'string', 'max:255'],
        ];
    }
}
