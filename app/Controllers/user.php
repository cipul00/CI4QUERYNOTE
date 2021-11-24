<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        $data = $users->getpickup();
        return view('user/index', compact('data'));
    }
}
