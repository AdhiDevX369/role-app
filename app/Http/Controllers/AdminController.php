<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //AdminDashboard
    public function AdminDashboard(){
        return view("admin.index");
    }//End Method
}
