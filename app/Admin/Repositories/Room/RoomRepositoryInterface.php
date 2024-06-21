<?php

namespace App\Admin\Repositories\Room;

use App\Admin\Repositories\EloquentRepositoryInterface;

interface RoomRepositoryInterface extends EloquentRepositoryInterface
{
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function count();

}
