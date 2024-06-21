<?php

namespace App\Admin\Http\Controllers\Amenities;

use App\Admin\Http\Controllers\BaseSearchSelectController;
use App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;
use App\Admin\Http\Resources\Amenities\AmenitiesSearchSelectResource;

class AmenitiesSearchSelectController extends BaseSearchSelectController
{
    public function __construct(
        AmenitiesRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }

    protected function selectResponse(){
        $this->instance = [
            'results' => AmenitiesSearchSelectResource::collection($this->instance)
        ];
    }
}
