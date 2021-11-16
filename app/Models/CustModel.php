<?php

namespace App\Models;

use CodeIgniter\Model;

class CustModel extends Model
{
    protected $table = "datacust";
    protected $primaryKey = "invoice";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username_admin', 'nama_cust', 'no_telp', 'alamat', 'jenis_layanan', 'kuantitas', 'berat'];
}
