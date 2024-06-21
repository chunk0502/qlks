<?php

namespace App\Admin\Repositories\Service;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Service\ServiceRepositoryInterface;
use App\Models\Service;

class ServiceRepository extends EloquentRepository implements ServiceRepositoryInterface
{

    public function getModel(){
        return Service::class;
    }
    public function count(){
        return $this->model->count();
    }
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC'){
        $this->getQueryBuilder();
        $this->instance = $this->instance->orderBy($column, $sort);
        return $this->instance;
    }
}
