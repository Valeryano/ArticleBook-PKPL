<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PosterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Judul_Poster' => 'required|String',
            'Penulis' => 'required|String',
            'Nama_Jurnal' => 'required|String',
            'Volume_Jurnal' => 'required|String',
            'Halaman' => 'required|String',
            'ISSN' => 'required|String',
            'Penerbit' => 'required|String',
            'URL' => 'required|String'
        ];
    }
}
