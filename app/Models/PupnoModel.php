<?php

namespace App\Models;

use CodeIgniter\Model;

class PupnoModel extends Model
{
    protected $table      = 'de_pickup_note';
    protected $primaryKey = 'pickup_no';
    protected $primaryKey2 = 'origin';

    // protected $returnType     = 'object';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nama', 'nip', 'alamat', 'telepon'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
