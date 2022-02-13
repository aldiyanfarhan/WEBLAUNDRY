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
            'customer' => $searchcustomer->paginate(10, 'customer'),
            'pager' => $this->customer->pager
        ];
        return view('Admin', $data);
    }

    function edit($invoice)
    {
        $dataCustomer = $this->customer->find($invoice);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Customer Tidak ditemukan !');
        }
        $data['customer'] = $dataCustomer;
        return view('Edit', $data);
    }

    public function input()
    {
        // if (!$this->validate([
        //     'nama_cust' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'status' => [
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
        //     session()->setFlashdata('message', 'Tambah Data Customer Gagal');
        //     return redirect()->back()->withInput();
        // }

        $this->customer->insert([
            'nama_cust' => $this->request->getVar('nama'),
            'status' => $this->request->getVar('status'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_layanan' => $this->request->getVar('jenis_layanan'),
            'berat' => $this->request->getVar('berat'),
            'kuantitas' => $this->request->getVar('kuantitas'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Customer Berhasil');
        return redirect()->to('/Customer');
    }

    public function update($invoice)
    {
        // if (!$this->validate([
        //     'nama_cust' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Harus diisi'
        //         ]
        //     ],
        //     'status' => [
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
        //     session()->setFlashdata('message', 'Tambah Data Customer Gagal');
        //     return redirect()->back()->withInput();
        // }

        $this->customer->update($invoice, [
            'nama_cust' => $this->request->getVar('nama'),
            'status' => $this->request->getVar('status'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Customer Berhasil');
        return redirect()->to('/customer');
    }

    function delete($invoice)
    {
        $dataCustomer = $this->customer->find($invoice);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Customer Tidak ditemukan !');
        }
        $this->customer->delete($invoice);
        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
        return redirect()->to('/customer');
    }
}
