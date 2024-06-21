<?php

namespace App\Admin\Services\Booking;

use App\Admin\Services\Booking\BookingServiceInterface;
use  App\Admin\Repositories\Booking\BookingRepositoryInterface;
use Illuminate\Http\Request;

class BookingService implements BookingServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(BookingRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function store(Request $request){

        $this->data = $request->validated();

        return $this->repository->create($this->data);
    }

    public function update(Request $request){

        $this->data = $request->validated();

        return $this->repository->update($this->data['id'], $this->data);

    }

    public function delete($id){
        return $this->repository->delete($id);

    }

}
