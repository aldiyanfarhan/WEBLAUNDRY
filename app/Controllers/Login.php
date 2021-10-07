<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\Home;

class Login extends BaseController
{
  public function __construct()
  {
    helper('form');
  }
  public function index()
  {
    echo view('Login');
  }
}
