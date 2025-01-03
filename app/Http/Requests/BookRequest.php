<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=>'required|string|max:255',
            'author'=> 'required|string|max:255',
            'genre'=>'required|string|max:100',
            'publication_year'=>'required',
            'isbn'=>'required|string|max:20',
            'pages'=>'required|min:1|numeric',
            'language'=>'required|string|max:50',
            'publisher'=>'required|string|max:255'
        ];
    }

}
