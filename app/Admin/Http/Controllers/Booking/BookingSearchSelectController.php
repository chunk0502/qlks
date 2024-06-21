<?php

namespace App\Admin\Http\Controllers\Booking;

use App\Admin\Http\Controllers\BaseSearchSelectController;
use App\Admin\Repositories\Booking\BookingRepositoryInterface;

class BookingSearchSelectController extends BaseSearchSelectController
{
    public function __construct(
        BookingRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }

    protected function selectResponse(){
        $this->instance = [
//            'results' => BookingSearchSelectResource::collection($this->instance)
        ];
    }
}
