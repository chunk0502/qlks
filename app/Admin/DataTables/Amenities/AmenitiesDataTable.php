<?php
namespace App\Admin\DataTables\Amenities;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;
use App\Admin\Traits\GetConfig;

class AmenitiesDataTable extends BaseDataTable
{
    use GetConfig;

    // ID (Client) của bảng DataTable
    protected $nameTable = 'amenitiesTable';

    public function __construct(
        AmenitiesRepositoryInterface $repository
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
            'action' => 'admin.amenities.datatable.action',
            // 'fullname' => 'admin.amenities.datatable.fullname',
        ];
    }

    public function setColumnSearch(){
        $this->columnAllSearch = [ 0, 1];
    }




    protected function setCustomColumns(){
        $this->customColumns = config('datatables_columns.amenities', []);
    }
    protected function setCustomName(){
        $this->instanceDataTable = $this->instanceDataTable->editColumn('name', function($amenities) {
            return $amenities->name->description;
        });
    }

    // protected function setCustomEditColumns(){
    //     $this->customEditColumns = [
    //         'fullname' => $this->view['fullname'],
    //     ];
    // }

    protected function setCustomAddColumns(){
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(){
        $this->customRawColumns = ['fullname', 'action'];
    }
}
