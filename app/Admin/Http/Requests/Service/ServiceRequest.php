<?php

namespace App\Admin\Http\Requests\Service;

use App\Admin\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules\Enum;

class ServiceRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [

            'name' => ['required', 'string'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string'],
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\User,id'],
            'name' => ['required','string'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string'],
        ];
    }
}
