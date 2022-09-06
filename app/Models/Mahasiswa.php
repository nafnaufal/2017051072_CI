<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
