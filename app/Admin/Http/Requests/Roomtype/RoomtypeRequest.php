<?php

namespace App\Admin\Http\Requests\Roomtype;

use App\Admin\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules\Enum;

class RoomtypeRequest extends BaseRequest
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
            'bedroom' => ['required', 'int'],
            'description' => ['required', 'string'],
            'capacity' => ['required', 'int'],
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\User,id'],
            'name' => ['required','string'],
            'bedroom' => ['required', 'int'],
            'description' => ['required', 'string'],
            'capacity' => ['required', 'int'],
        ];
    }
}
