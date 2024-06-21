<?php
namespace App\Api\V1\Http\Controllers\User;

//use App\Admin\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller{

    public function  show($id)
    {
        return User::findOrFail($id);
    }
    public function  index()
    {
        return User::get();
    }
}
