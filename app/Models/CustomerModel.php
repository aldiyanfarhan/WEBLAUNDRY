<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = "customer";
    protected $primaryKey = "invoice";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username_admin', 'nama_cust', 'no_telp', 'alamat', 'jenis_layanan', 'kuantitas', 'berat'];

    public function search($keyword)
    {
        // $builder = $this->table('customer');
        // $builder
        return $this->table('Customer')->like('nama_cust', $keyword);
    }
    public function searchinvoice($keyword)
    {
        // $builder = $this->table('customer');
        // $builder
        return $this->table('Customer')->like('invoice', $keyword);
    }
}
