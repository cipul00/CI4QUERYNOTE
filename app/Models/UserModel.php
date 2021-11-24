<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'de_pickup_note';

    public function getpickup()
    {
        return $this->findAll();
    }
}
