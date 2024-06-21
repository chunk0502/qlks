<?php

namespace App\Admin\Repositories\Amenities;

use App\Admin\Repositories\EloquentRepositoryInterface;

interface AmenitiesRepositoryInterface extends EloquentRepositoryInterface
{
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function count();

}
