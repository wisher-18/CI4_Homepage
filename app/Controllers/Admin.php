<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PageModel;

class Admin extends BaseController
{
    public function index()
    {
        
        return view("auth/dashboard");
    }

   
   
}
