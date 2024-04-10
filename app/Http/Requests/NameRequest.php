<?php

namespace App\Http\Requests;
use App\StudInsert;

use Illuminate\Foundation\Http\FormRequest;

class  NameRequest  extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
          'address' => 'required|string|min:3|max:255',
          'email' => 'required|string|email|max:255'
            ];
    }
}
