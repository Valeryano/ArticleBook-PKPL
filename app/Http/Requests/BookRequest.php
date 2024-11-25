<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            "Judul"=> 'require|String',
            "Penulis"=> 'require|String',
            "ISBN_ISSN"=> 'require|String',
            "Penerbit"=> 'require|String',
            "Jumlah_Halaman"=> 'require|String',
            "DOI" => 'require|String',
            "URL" => 'require|String'
            
        ];
    }
}
