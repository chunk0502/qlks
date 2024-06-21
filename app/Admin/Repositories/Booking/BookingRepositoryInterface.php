<?php

namespace App\Admin\Repositories\Booking;

use App\Admin\Repositories\EloquentRepositoryInterface;

interface BookingRepositoryInterface extends EloquentRepositoryInterface
{
	public function count();
	public function searchAllLimit($value = '', $meta = [], $limit = 10);
}
