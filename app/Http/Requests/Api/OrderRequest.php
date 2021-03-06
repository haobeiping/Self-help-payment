<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class OrderRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dorm_id' => 'required',
            'money' => 'required',
        ];
    }
}
