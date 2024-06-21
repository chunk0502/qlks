<?php

namespace App\Admin\Http\Controllers\Dashboard;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Repositories\User\UserRepositoryInterface;
use App\Admin\Repositories\Room\RoomRepositoryInterface;
use App\Admin\Repositories\Roomtype\RoomtypeRepositoryInterface;
use App\Admin\Repositories\Service\ServiceRepositoryInterface;
use App\Admin\Repositories\Amenities\AmenitiesRepositoryInterface;

class DashboardController extends Controller
{
    public $repoUser,$repoRoom,$repoRoomtype,$repoService,$repoAmenities;

    public function __construct(
        UserRepositoryInterface $repoUser,
        RoomRepositoryInterface $repoRoom,
        RoomtypeRepositoryInterface $repoRoomtype,
        ServiceRepositoryInterface $repoService,
        AmenitiesRepositoryInterface $repoAmenities,
    )
    {
        parent::__construct();
        $this->repoUser = $repoUser;
        $this->repoRoom = $repoRoom;
        $this->repoRoomtype = $repoRoomtype;
        $this->repoService = $repoService;
        $this->repoAmenities = $repoAmenities;
    }

    public function getView()
    {
        return [
            'index' => 'admin.dashboard.index'
        ];
    }
    public function index(){
        $totaluser = $this->repoUser->count();
        $totalroom = $this->repoRoom->count();
        $totalroomtype = $this->repoRoomtype->count();
        $totalservice = $this->repoService->count();
        $totalamenities = $this->repoAmenities->count();

        return view($this->view['index'], [
            'total_user' => $totaluser,
            'total_room' => $totalroom,
            'total_roomtype' => $totalroomtype,
            'total_service' => $totalservice,
            'total_amenities' => $totalamenities,
            'breadcrums' => $this->crums
        ]);
    }

}
