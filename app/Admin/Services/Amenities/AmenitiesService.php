<?php

namespace App\Admin\Services\Amenities;

use App\Admin\Services\Amenities\AmenitiesServiceInterface;
use  App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;
use Illuminate\Http\Request;

class AmenitiesService implements AmenitiesServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(AmenitiesRepositoryInterface $repository){
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
