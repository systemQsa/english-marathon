<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Admin\UserController;

class HomeController extends Controller
{
    public function index(){
       // $users = User::all();
       return view('admin.home.index');
    }
}
