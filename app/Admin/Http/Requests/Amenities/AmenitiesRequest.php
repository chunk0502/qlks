<?php

namespace App\Admin\Http\Requests\Amenities;

use App\Admin\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules\Enum;

class AmenitiesRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [
            'name' => ['required','string'],
            'description' => ['required', 'string'],
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\Amenities,id'],
            'name' => ['required','string'],
            'description' => ['required', 'string'],
        ];
    }
}
