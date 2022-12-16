<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestCreateRequest extends FormRequest
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
            'title' => 'required | min:3 | max: 200',
            'category' => 'required',
            'level' => 'required'
        ];
    }
    // public function attributes()
    // {
    //     return [
    //         'title' => 'テスト名',
    //         'description' => 'Quiz Açıklama',
    //         'finished_at' => 'Quiz Son Tarihi',
    //     ];
    // }
}