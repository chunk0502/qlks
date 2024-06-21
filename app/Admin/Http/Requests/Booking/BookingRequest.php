<?php

namespace App\Admin\Http\Requests\Booking;

use App\Admin\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Room\StatusRoom;

class BookingRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [
            'name' => [
                'required',
                'string', 'min:6', 'max:50',
                'unique:App\Models\User,username',
                'regex:/^[A-Za-z0-9_-]+$/',
                function ($attribute, $value, $fail) {
                    if (in_array(strtolower($value), ['admin', 'user', 'password'])) {
                        $fail('The '.$attribute.' cannot be a common keyword.');
                    }
                },
            ],
            'status' => ['required', 'int'],
            'location' => ['required', 'string'],
            'price' => ['required', 'string'],
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\User,id'],
            'name' => [
                'required',
                'string', 'min:6', 'max:50',
                'unique:App\Models\User,username,'.$this->id,
                'regex:/^[A-Za-z0-9_-]+$/',
                function ($attribute, $value, $fail) {
                    if (in_array(strtolower($value), ['admin', 'user', 'password'])) {
                        $fail('The '.$attribute.' cannot be a common keyword.');
                    }
                },
            ],
            'status' => ['required', 'int'],
            'location' => ['required', 'string'],
            'price' => ['required', 'string'],
        ];
    }
}
