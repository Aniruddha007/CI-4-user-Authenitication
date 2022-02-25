<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $title = "Dashboard";
        return view("pages/dashboard/index",compact('title'));
    }
}