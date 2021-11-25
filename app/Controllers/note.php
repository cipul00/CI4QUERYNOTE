<?php

namespace App\Controllers;

class note extends BaseController
{

    public function inner()
    {
        $data['title'] = 'Pickup Note';

        // $builder = $this->db->table("de_pickup_note as a");
        // $builder->select('a.*, course.name as course_name');
        // $builder->join('sp_customer as cust', 'user.id = course.user_id');
        // $data = $builder->get()->getResult();


        // koneksi db langsung dari controler
        $builder = $this->db->table("de_pickup_note as a");
        $builder->join('sp_customer as b', 'a.account_no = b.account_no');
        $builder->join('me_employee as c', 'a.pickup_empl = c.empl_code');
        $builder->orderBy('pickup_date', 'DESC');
        $query = $builder->get(50, 0,)->getResult();
        $data['de_pickup_note'] = $query;
        return view('user/index', $data);
        // $data = $builder->get()->getResult();

        // echo "<pre>";
        // print_r($data);
    }
}
