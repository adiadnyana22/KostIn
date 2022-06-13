<?php

namespace App\Http\Requests\KostOwner;

use Illuminate\Foundation\Http\FormRequest;

class KostRequest extends FormRequest
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
            'kostName' => ['required', 'string'],
            'kostTipe' => ['required', 'string'],
            'kostJumlahKamar' => ['required', 'numeric', 'min:1'],
            'kostJumlahPenghuni' => ['required', 'numeric', 'min:0'],
            'kostPrice' => ['required'],
            'kostPhoto' => ['required'],
            'kostFacilities' => ['array', 'nullable'],
            'kostDescription' => ['required', 'string'],
            'kostKecamatan' => ['required', 'string'],
            'kostKabupaten' => ['required', 'string'],
            'kostProvinsi' => ['required'],
            'kostKodePos' => ['required', 'numeric'],
            'kostDetailAlamat' => ['required', 'string'],
        ];
    }
}
