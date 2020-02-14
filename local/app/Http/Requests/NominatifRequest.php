<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NominatifRequest extends FormRequest
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
        if ($this->method()=='PATCH') {
            $base_rules = 'sometimes|string|unique:nominatif,no_base,'.$this->get('id');
        }else{
            $base_rules = 'required|string|unique:nominatif,no_base';
        }

        return [
            'no_base' => $base_rules,
            'nama' => 'required',
            'stat' => 'required',
            'sample' => 'required',
            'outstanding' => 'required',
            'ppap_tb' => 'required',
            'kol_lsmk' => 'required',
            'kol_1_pilar' => 'required',
            'kol_3_pilar' => 'required',
            'sample2' => 'required',
            'kol_auditor' => 'required',
            'aydd_auditor' => 'required',
        ];
    }
}
