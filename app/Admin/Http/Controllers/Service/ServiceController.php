<?php

namespace App\Admin\Http\Controllers\Service;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Service\ServiceRequest;
use App\Admin\Repositories\Service\ServiceRepositoryInterface;
use App\Admin\Services\Service\ServiceServiceInterface;
use App\Admin\DataTables\Service\ServiceDataTable;

class ServiceController extends Controller
{
    public function __construct(
        ServiceRepositoryInterface $repository,
        ServiceServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.services.index',
            'create' => 'admin.services.create',
            'edit' => 'admin.services.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.service.index',
            'create' => 'admin.service.create',
            'edit' => 'admin.service.edit',
            'delete' => 'admin.service.delete'
        ];
    }
    public function index(ServiceDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('service'))
        ]);
    }

    public function create(){
        return view($this->view['create'], [
            'breadcrums' => $this->crums->add(__('service'), route($this->route['index']))->add(__('add'))
        ]);
    }

    public function store(ServiceRequest $request){

        $response = $this->service->store($request);

        if($response){
            return $request->input('submitter') == 'save'
                    ? to_route($this->route['edit'], $response->id)->with('success', __('notifySuccess'))
                    : to_route($this->route['index'])->with('success', __('notifySuccess'));
        }

        return back()->with('error', __('notifyFail'))->withInput();
    }

    public function edit($id){

        $instance = $this->repository->findOrFail($id);
        return view(
            $this->view['edit'],
            [
                'service' => $instance,
                'breadcrums' => $this->crums->add(__('service'), route($this->route['index']))->add(__('edit'))
            ],
        );
    }

    public function update(ServiceRequest $request){

        $response = $this->service->update($request);

        if($response){
            return $request->input('submitter') == 'save'
                    ? back()->with('success', __('notifySuccess'))
                    : to_route($this->route['index'])->with('success', __('notifySuccess'));
        }

        return back()->with('error', __('notifyFail'));
    }

    public function delete($id){

        $this->service->delete($id);

        return to_route($this->route['index'])->with('success', __('notifySuccess'));
    }
}
