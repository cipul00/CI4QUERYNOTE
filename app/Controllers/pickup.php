<?php

namespace App\Controllers;

use App\Models\UserModel;

class pickup extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('de_pickup_note');
        // $query   = $builder->get();  // Produces: SELECT * FROM mytable
        $builder->orderBy('pickup_date', 'DESC');
        $query = $builder->get(50, 0,)->getResult();
        $data['de_pickup_note'] = $query;
        return view('user/index', $data);
        // return view('user/index', compact('data'));

        // print_r($query->getResult());
    }
}
