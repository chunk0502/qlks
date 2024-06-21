<?php
namespace App\Admin\DataTables\Service;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Service\ServiceRepositoryInterface;
use App\Admin\Traits\GetConfig;

class ServiceDataTable extends BaseDataTable
{
    use GetConfig;

    // ID (Client) của bảng DataTable
    protected $nameTable = 'servicesTable';

    public function __construct(
        ServiceRepositoryInterface $repository
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
            'action' => 'admin.services.datatable.action',
            'name' => 'admin.services.datatable.name',
        ];
    }

    public function setColumnSearch(){
        $this->columnAllSearch = [ 0, 1, 2];
    }




    protected function setCustomColumns(){
        $this->customColumns = config('datatables_columns.service', []);
    }

    protected function setCustomEditColumns(){
        $this->customEditColumns = [
            'name' => $this->view['name'],
            'price' => '{{ number_format($price) }}'
        ];
    }

    protected function setCustomAddColumns(){
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(){
        $this->customRawColumns = ['name', 'action', 'description'];
    }
}
