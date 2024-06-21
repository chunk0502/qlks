<?php
namespace App\Api\V1\Http\Controllers\Amenities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenities;
class AmenitiesController extends Controller{

    public function  show($id)
    {
        return Amenities::findOrFail($id);
    }
    public function  index()
    {
        return Amenities::get();
    }
}
