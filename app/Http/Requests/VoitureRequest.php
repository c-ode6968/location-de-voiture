<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoitureRequest extends FormRequest
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
            'marque' => 'required|min:4',
            'model' => 'required',
            'plaque_immatriculation' => 'required|unique',
            'aménagement' => 'required',
            'nombre_de_place' => 'required',
            'prix_location_journalier' => 'required',
            'nombre_de_place' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
