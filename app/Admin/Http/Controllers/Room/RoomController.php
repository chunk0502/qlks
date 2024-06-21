<?php

namespace App\Admin\Http\Controllers\Room;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Room\RoomRequest;
use App\Admin\Repositories\Room\RoomRepositoryInterface;
use App\Admin\Services\Room\RoomServiceInterface;
use App\Admin\DataTables\Room\RoomDataTable;
use App\Models\Roomtype;


class RoomController extends Controller
{
    public function __construct(
        RoomRepositoryInterface $repository,
        RoomServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.rooms.index',
            'create' => 'admin.rooms.create',
            'edit' => 'admin.rooms.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.room.index',
            'create' => 'admin.room.create',
            'edit' => 'admin.room.edit',
            'delete' => 'admin.room.delete'
        ];
    }
    public function index(RoomDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('room'))
        ]);
    }

    public function create(){
        $roomtype = Roomtype::pluck('name', 'id');
        return view($this->view['create'], [
            'breadcrums' => $this->crums->add(__('room'), route($this->route['index']))->add(__('add')),
            'roomtype' => $roomtype,
        ]);
    }

    public function store(RoomRequest $request){

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
        $roomtype = Roomtype::pluck('name', 'id');
        return view(
            $this->view['edit'],
            [
                'room' => $instance,
                'breadcrums' => $this->crums->add(__('room'), route($this->route['index']))->add(__('edit')),
                'roomtype' => $roomtype,
            ],
        );
    }

    public function update(RoomRequest $request){

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
