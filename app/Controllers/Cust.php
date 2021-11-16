<?php

namespace App\Controllers;

use App\Models\CustModel;

class Cust extends BaseController
{
    protected $customor;

    function __construct()
    {
        $this->cust = new CustModel();
    }

    public function index()
    {
        $data['datacust'] = $this->datacust->findAll();
        return view('pegawai/index', $data);
    }
}
