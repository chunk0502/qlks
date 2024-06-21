<?php

namespace App\Admin\Services\Room;

use App\Admin\Services\Room\RoomServiceInterface;
use  App\Admin\Repositories\Room\RoomRepositoryInterface;
use Illuminate\Http\Request;

class RoomService implements RoomServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(RoomRepositoryInterface $repository){
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
