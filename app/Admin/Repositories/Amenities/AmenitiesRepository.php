<?php

namespace App\Admin\Repositories\Amenities;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;
use App\Models\Amenities;

class AmenitiesRepository extends EloquentRepository implements AmenitiesRepositoryInterface
{

    public function getModel(){
        return Amenities::class;
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
