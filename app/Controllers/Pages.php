<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function LoginPage()
    {
        return view('Login');
    }
    public function AdminPage()
    {
        return view('Admin');
    }
}
