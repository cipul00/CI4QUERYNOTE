<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }
    public function index()
    {
        return view('auth/login');
        // echo 'tess halaman';
    }
    public function register()
    {
        return view('auth/register');
    }
    public function users()
    {

        return view('user/index');
    }
}
