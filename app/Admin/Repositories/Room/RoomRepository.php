<?php

namespace App\Admin\Repositories\Room;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Room\RoomRepositoryInterface;
use App\Models\Room;

class RoomRepository extends EloquentRepository implements RoomRepositoryInterface
{

    public function getModel(){
        return Room::class;
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
