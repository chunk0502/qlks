<?php

namespace App\Admin\Http\Controllers\Roomtype;

use App\Admin\Http\Controllers\BaseSearchSelectController;
use App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use App\Admin\Http\Resources\Roomtype\RoomtypeSearchSelectResource;

class RoomtypeSearchSelectController extends BaseSearchSelectController
{
    public function __construct(
        RoomtypeRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }

    protected function selectResponse(){
        $this->instance = [
            'results' => RoomtypeSearchSelectResource::collection($this->instance)
        ];
    }
}
