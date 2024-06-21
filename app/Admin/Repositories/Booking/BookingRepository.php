<?php

namespace App\Admin\Repositories\Booking;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Booking\BookingRepositoryInterface;
use App\Models\Booking;

class BookingRepository extends EloquentRepository implements BookingRepositoryInterface
{

    public function getModel(){
        return Booking::class;
    }
    public function count(){
        return $this->model->count();
    }
    public function searchAllLimit($keySearch = '', $meta = [], $limit = 10){

        $this->instance = $this->model;

        $this->getQueryBuilderFindByKey($keySearch);

        $this->applyFilters($meta);

        return $this->instance->limit($limit)->get();
    }

    protected function getQueryBuilderFindByKey($key){
        $this->instance = $this->instance->where(function($query) use ($key){
            return $query->where('name', 'LIKE', '%'.$key.'%')
            ->orWhere('phone', 'LIKE', '%'.$key.'%')
            ->orWhere('email', 'LIKE', '%'.$key.'%')
            ->orWhere('fullname', 'LIKE', '%'.$key.'%');
        });
    }
}
