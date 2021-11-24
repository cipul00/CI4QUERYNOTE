<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        // $query = $de_pickup->get(10, 20);
        $users = new UserModel();
        $data = $users->getUsers();
        return view('user/index', compact('data'));
    }
}
