<?php

namespace App\Http\Requests;

class PostRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            'user_id' => 'required',
            'slug' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
        ];
    }
}
