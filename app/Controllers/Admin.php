<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view("admin/login");
    }

    public function signup(){
        return view("admin/register");
    }
}
