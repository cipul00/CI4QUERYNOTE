<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'de_pickup_note';

    public function getUsers()
    {
        return $this->findAll();
        // $query = $this->db->get('de_pickup_note', 20);
        // return $query;
    }
}
