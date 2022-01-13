<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Home extends BaseController
{
    protected $customer;


    function __construct()
    {
        $this->customer = new CustomerModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $searchcustomer = $this->customer->searchinvoice($keyword);
        } else {
            $searchcustomer = $this->customer->searchinvoice("Null");
        }

        $data = [
            'customer' => $searchcustomer->paginate(10, 'customer'),
            'pager' => $this->customer->pager
        ];
        return view('Home', $data);
    }
}
