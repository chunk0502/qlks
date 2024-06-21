<?php

namespace App\Admin\DataTables\Room;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Room\RoomRepositoryInterface;
use App\Admin\Traits\GetConfig;


class RoomDataTable extends BaseDataTable
{
    use GetConfig;

    // ID (Client) của bảng DataTable
    protected $nameTable = 'roomsTable';

    public function __construct(
        RoomRepositoryInterface $repository
    ){
        $this->repository = $repository;

        parent::__construct();
    }

    public function setView(){
        $this->view = [
            'action' => 'admin.rooms.datatable.action',
            'name' => 'admin.rooms.datatable.name',
            'feature_image' => 'admin.rooms.datatable.feature-image',
        ];
    }

    public function setColumnSearch(){
        $this->columnAllSearch = [ 0, 1, 2, 3];
    }

    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    protected function setCustomColumns(){
        $this->customColumns = config('datatables_columns.room', []);
    }
    // Thiết lập Sửa một cột
    protected function setCustomEditColumns(){
        // Danh sách các mảng view cột sẽ sửa lại
        $this->customEditColumns = [
            'name' => $this->view['name'],
            'feature_image' => $this->view['feature_image'],
            'id_roomtype' => function($room){
                return $room->roomType->name;
            },
        ];
    }

    protected function setCustomAddColumns(){
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }
    protected function setCustomRawColumns(){
        $this->customRawColumns = ['name', 'feature_image', 'action'];
    }
}
