<?php
namespace App\Admin\DataTables\Roomtype;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use App\Admin\Traits\GetConfig;

class RoomtypeDataTable extends BaseDataTable
{
    use GetConfig;

    // ID (Client) của bảng DataTable
    protected $nameTable = 'room_typesTable';

    public function __construct(
        RoomtypeRepositoryInterface $repository
    ){
        $this->repository = $repository;

        parent::__construct();
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setView(){
        $this->view = [
            'action' => 'admin.roomtypes.datatable.action',
            'name' => 'admin.roomtypes.datatable.name',
        ];
    }

    public function setColumnSearch(){
        $this->columnAllSearch = [ 0, 1, 2, 3];
    }

    protected function setCustomColumns(){
        $this->customColumns = config('datatables_columns.roomtype', []);
    }

    protected function setCustomEditColumns(){
        $this->customEditColumns = [
            'name' => $this->view['name'],
        ];
    }

    protected function setCustomAddColumns(){
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(){
        $this->customRawColumns = ['name', 'action','description'];
    }
}
