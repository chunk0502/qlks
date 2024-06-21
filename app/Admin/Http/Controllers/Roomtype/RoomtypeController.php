<?php

namespace App\Admin\Http\Controllers\Roomtype;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Roomtype\RoomtypeRequest;
use App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use App\Admin\Services\Roomtype\RoomtypeServiceInterface;
use App\Admin\DataTables\Roomtype\RoomtypeDataTable;

class RoomtypeController extends Controller
{
    public function __construct(
        RoomtypeRepositoryInterface $repository,
        RoomtypeServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.roomtypes.index',
            'create' => 'admin.roomtypes.create',
            'edit' => 'admin.roomtypes.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.roomtype.index',
            'create' => 'admin.roomtype.create',
            'edit' => 'admin.roomtype.edit',
            'delete' => 'admin.roomtype.delete'
        ];
    }
    public function index(RoomtypeDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('roomtype'))
        ]);
    }

    public function create(){
        return view($this->view['create'], [
            'breadcrums' => $this->crums->add(__('roomtype'), route($this->route['index']))->add(__('add'))
        ]);
    }

    public function store(RoomtypeRequest $request){

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
                'roomtype' => $instance,
                'breadcrums' => $this->crums->add(__('roomtype'), route($this->route['index']))->add(__('edit'))
            ],
        );
    }

    public function update(RoomtypeRequest $request){

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
