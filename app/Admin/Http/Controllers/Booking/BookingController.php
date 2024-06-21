<?php

namespace App\Admin\Http\Controllers\Booking;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Booking\BookingRequest;
use App\Admin\Repositories\Booking\BookingRepositoryInterface;
use App\Admin\Services\Booking\BookingServiceInterface;
use App\Admin\DataTables\Booking\BookingDataTable;
use App\Models\Booking;

class BookingController extends Controller
{
    public function __construct(
        BookingRepositoryInterface $repository,
        BookingServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.bookings.index',
            'create' => 'admin.bookings.create',
            'edit' => 'admin.bookings.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.booking.index',
            'create' => 'admin.booking.create',
            'edit' => 'admin.booking.edit',
            'delete' => 'admin.booking.delete'
        ];
    }
    public function index(BookingDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('Booking'))
        ]);
    }

    public function create(){

        return view($this->view['create'], [
            'breadcrums' => $this->crums->add(__('booking'), route($this->route['index']))->add(__('add'))
        ]);
    }

    public function store(BookingRequest $request){

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
                'booking' => $instance,
                'breadcrums' => $this->crums->add(__('booking'), route($this->route['index']))->add(__('edit'))
            ],
        );
    }

    public function update(BookingRequest $request){

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
