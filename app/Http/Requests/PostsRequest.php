<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'diary.weather' => 'required|string|max:5',
            'diary.name' => 'required|string|max:10',
            'diary.First_class' => 'required|string|max:10',
            'diary.First_content' => 'required|string|max:20',
            'diary.First_impression' => 'required|string|max:50',
            'diary.Secound_class' => 'required|string|max:10',
            'diary.Secound_content' => 'required|string|max:20',
            'diary.Secound_impression' => 'required|string|max:50',
            'diary.Third_class' => 'required|string|max:10',
            'diary.Third_content' => 'required|string|max:20',
            'diary.Third_impression' => 'required|string|max:50',
            'diary.Total_impression' => 'required|string|max:200|min:20',
        ];
    }
}
