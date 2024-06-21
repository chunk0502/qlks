<?php
namespace App\Api\V1\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller{

    public function show($id)
    {
        return Service::findOrFail($id);
    }
    public function  index()
    {
        return Service::get();
    }

}
