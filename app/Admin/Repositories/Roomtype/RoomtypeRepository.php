<?php

namespace App\Admin\Repositories\Roomtype;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use App\Models\Roomtype;

class RoomtypeRepository extends EloquentRepository implements RoomtypeRepositoryInterface
{

    public function getModel(){
        return Roomtype::class;
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
