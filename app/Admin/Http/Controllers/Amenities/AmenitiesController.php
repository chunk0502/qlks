<?php

namespace App\Admin\Http\Controllers\Amenities;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Amenities\AmenitiesRequest;
use App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;
use App\Admin\Services\Amenities\AmenitiesServiceInterface;
use App\Admin\DataTables\Amenities\AmenitiesDataTable;

class AmenitiesController extends Controller
{
    public function __construct(
        AmenitiesRepositoryInterface $repository,
        AmenitiesServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.amenities.index',
            'create' => 'admin.amenities.create',
            'edit' => 'admin.amenities.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.amenities.index',
            'create' => 'admin.amenities.create',
            'edit' => 'admin.amenities.edit',
            'delete' => 'admin.amenities.delete'
        ];
    }
    public function index(AmenitiesDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('amenities'))
        ]);
    }

    public function create(){
        return view($this->view['create'], [
            'breadcrums' => $this->crums->add(__('amenities'), route($this->route['index']))->add(__('add'))
        ]);
    }

    public function store(AmenitiesRequest $request){

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
                'amenities' => $instance,
                'breadcrums' => $this->crums->add(__('amenities'), route($this->route['index']))->add(__('edit'))
            ],
        );
    }

    public function update(AmenitiesRequest $request){

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
