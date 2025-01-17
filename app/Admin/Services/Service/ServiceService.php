<?php

namespace App\Admin\Services\Service;

use App\Admin\Services\Service\ServiceServiceInterface;
use  App\Admin\Repositories\Service\ServiceRepositoryInterface;
use Illuminate\Http\Request;

class ServiceService implements ServiceServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(ServiceRepositoryInterface $repository){
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
