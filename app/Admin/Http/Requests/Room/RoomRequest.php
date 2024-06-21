<?php

namespace App\Admin\Http\Requests\Room;

use App\Admin\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules\Enum;

class RoomRequest extends BaseRequest
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
            'location' => ['required', 'string'],
            'price' => ['required', 'string'],
            'feature_image' => ['required'],
            'list_image' => ['required'],
            'id_roomtype' => ['required'],
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\Room,id'],
            'name' => ['required','string'],
            'location' => ['required', 'string'],
            'price' => ['required', 'string'],
            'feature_image' => ['required'],
//            'list_image' => ['required'],
            'id_roomtype' => ['required'],
        ];
    }
}
