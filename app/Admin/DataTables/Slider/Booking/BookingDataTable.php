<?php

namespace App\Admin\DataTables\Booking;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Booking\BookingRepositoryInterface;
use App\Admin\Traits\GetConfig;


class BookingDataTable extends BaseDataTable
{
    use GetConfig;

    // ID (Client) của bảng DataTable
    protected $nameTable = 'roomsTable';

    public function __construct(
        BookingRepositoryInterface $repository
    ){
        $this->repository = $repository;

        parent::__construct();
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }
    // public function dataTable($query)
    // {
    //     $this->instanceDataTable = datatables()->eloquent($query)->addIndexColumn();
    //     // $this->setColumnName();
    //     return $this->instanceDataTable;
    // }

    public function setView(){
        $this->view = [
            'action' => 'admin.bookings.datatable.action',
        ];
    }

    public function setColumnSearch(){
        $this->columnAllSearch = [ 1, 2, 3, 4];
    }




    protected function setCustomColumns(){
        $this->customColumns = config('datatables_columns.booking', []);
    }
    protected function setCustomName(){
        $this->instanceDataTable = $this->instanceDataTable->editColumn('name', function($booking) {
            return $booking->name->description;
        });
    }

    protected function setCustomEditColumns(){
        // $this->customEditColumns = [
        //     'fullname' => $this->view['fullname'],
        // ];
    }

    protected function setCustomAddColumns(){
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(){
        $this->customRawColumns = [ 'action'];
    }

}
