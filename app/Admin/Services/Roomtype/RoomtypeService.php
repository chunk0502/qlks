<?php

namespace App\Admin\Services\Roomtype;

use App\Admin\Services\Roomtype\RoomtypeServiceInterface;
use  App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use Illuminate\Http\Request;

class RoomtypeService implements RoomtypeServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(RoomtypeRepositoryInterface $repository){
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
