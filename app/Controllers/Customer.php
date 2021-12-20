<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customer;

    function __construct()
    {
        $this->customer = new CustomerModel();
    }

    public function index()
    {
        // $data['customer'] = $this->customer->findAll();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $searchcustomer = $this->customer->search($keyword);
        } else {
            $searchcustomer = $this->customer;
        }

        $data = [
            'customer' => $searchcustomer->paginate(5, 'customer'),
            'pager' => $this->customer->pager
        ];
        return view('Admin', $data);
    }

    public function input()
    {
        // if (!$this->validate([
        //     'status' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'nama_cust' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'jenis_layanan' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'

        //         ]
        //     ],
        //     'no_telp' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'alamat' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],

        // ])) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // }

        $this->customer->insert([
            'nama_cust' => $this->request->getVar('nama'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'status' => $this->request->getVar('status'),
            'berat' => $this->request->getVar('berat'),
            'kuantitas' => $this->request->getVar('kuantitas'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Customer Berhasil');
        return redirect()->to('/customer');
    }
}
