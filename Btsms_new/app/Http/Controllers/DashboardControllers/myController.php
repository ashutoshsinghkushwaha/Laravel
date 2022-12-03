<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllotSystemRecord;
class myController extends Controller
{
    public function customUrl()
    {
        $mydata = AllotSystemRecord::all();
        
        return view("admin.app",["employee"=>$mydata]);
    }
}
