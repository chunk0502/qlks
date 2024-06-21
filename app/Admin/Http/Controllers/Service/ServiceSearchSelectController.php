<?php

namespace App\Admin\Http\Controllers\Service;

use App\Admin\Http\Controllers\BaseSearchSelectController;
use App\Admin\Repositories\Service\ServiceRepositoryInterface;
use App\Admin\Http\Resources\Service\ServiceSearchSelectResource;

class ServiceSearchSelectController extends BaseSearchSelectController
{
    public function __construct(
        ServiceRepositoryInterface $repository
    ){
        $this->repository = $repository;
    }

    protected function selectResponse(){
        $this->instance = [
            'results' => ServiceSearchSelectResource::collection($this->instance)
        ];
    }
}
