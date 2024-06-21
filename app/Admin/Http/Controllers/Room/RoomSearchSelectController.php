<?php

namespace App\Admin\Http\Controllers\Room;

use App\Admin\Http\Controllers\BaseSearchSelectController;
use App\Admin\Repositories\Room\RoomRepositoryInterface;
//use App\Admin\Http\Resources\Room\RoomSearchSelectResource;

class RoomSearchSelectController extends BaseSearchSelectController
{
    public function __construct(
        RoomRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }

    protected function selectResponse(){
        $this->instance = [
//            'results' => RoomSearchSelectResource::collection($this->instance)
        ];
    }
}
