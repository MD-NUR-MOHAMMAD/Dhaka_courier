<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.admin');
    }
    public function employeeIndex()
    {
        return view('admin.employee');
    }
    public function clientIndex()
    {
        return view('admin.client');
    }
}
