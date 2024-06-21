<?php

namespace App\Admin\Repositories\Service;

use App\Admin\Repositories\EloquentRepositoryInterface;

interface ServiceRepositoryInterface extends EloquentRepositoryInterface
{
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function count();

}
