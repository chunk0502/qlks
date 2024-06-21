<?php

namespace App\Admin\Repositories\Roomtype;

use App\Admin\Repositories\EloquentRepositoryInterface;

interface RoomtypeRepositoryInterface extends EloquentRepositoryInterface
{
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function count();

}
